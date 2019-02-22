<?php

namespace App;

use App\Model\AndroidDeviceToken;
use App\Model\Attribute;
use App\Model\DefaultSetting;
use App\Model\Group;
use App\Model\Manager;
use App\Model\Session;
use function foo\func;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;
use PhpParser\Builder;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable, SoftDeletes;


    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->unique_id = str_random(10);
        });

        static::deleting(function (User $user) {
            // 参加している系
            $user->participatedGroups()->get()->each(function (Group $group) {
                $group->pivot->deleted_at = now();
                $group->pivot->save();
            });
            $user->participatedSessions()->get()->each(function (Session $session) {
                $session->pivot->deleted_at = now();
                $session->pivot->save();
            });

            // 友達は双方向で削除
            $user->allFriends()->get()->each(function (User $user) {
                $user->pivot->deleted_at = now();
                $user->pivot->save();
            });
            $user->allRequestMeUsers()->get()->each(function (User $user) {
                $user->pivot->deleted_at = now();
                $user->pivot->save();
            });

            // 管理しているものを削除
            $user->managedAttributes()->delete();
            $user->managedGroups()->delete();
            $user->managedDefaultSettings()->delete();
            $user->managedSessions()->delete();
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'name', 'password', 'remember_token',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }


    // パスワードは自動的にhashする
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }



    /**
     * リレーション
     */

    // 申請中 ＋ フレンド ＋ 申請したけどブロックされた
    public function allFriends()
    {
        return $this->belongsToMany(self::class, 'user_friends', 'user_id', 'friend_id')
            ->wherePivot('deleted_at', null)
            ->withPivot('attribute_id', 'permitted', 'deleted_at');
    }
    // フレンド
    public function friends()
    {
        return $this->allFriends()->wherePivot('permitted', true);
    }
    // 申請したけどブロックされた
    public function blockMeUsers()
    {
        return $this->allFriends()->wherePivot('permitted', false);
    }
    // 申請中
    public function waitingFriends()
    {
        return $this->allFriends()->wherePivot('permitted', null);
    }

    /**
     * 自分を友たちとして追加しているユーザー
     */

    // 自分に対してフレンド申請かなにかをしたユーザー
    public function allRequestMeUsers()
    {
        return $this->belongsToMany(self::class, 'user_friends', 'friend_id', 'user_id')
            ->wherePivot('deleted_at', null)
            ->withPivot('attribute_id', 'permitted', 'deleted_at');
    }
    // 自分にフレンド申請しているユーザー
    public function invitingMeUsers()
    {
        return $this->allRequestMeUsers()->wherePivot('permitted', null);
    }
    // 自分に申請してきたユーザーで、自分がそれを了承した
    public function permittingUsers()
    {
        return $this->allRequestMeUsers()->wherePivot('permitted', true);
    }
    // 申請してきたけど、ブロックした
    public function blockingUsers()
    {
        return $this->allRequestMeUsers()->wherePivot('permitted', false);
    }

    public function managedSessions()
    {
        return $this->hasMany(Session::class, 'manager_id');
    }

    public function participatedSessions()
    {
        return $this->belongsToMany(Session::class)
            ->wherePivot('deleted_at', null)
            ->withPivot('join_status', 'paid', 'plus_minus', 'deleted_at');
    }

    public function waitSessions()
    {
        return $this->participatedSessions()->wherePivot('join_status', 'wait');
    }

    public function allowSessions()
    {
        return $this->participatedSessions()->wherePivot('join_status', 'allow');
    }

    public function denySessions()
    {
        return $this->participatedSessions()->wherePivot('join_status', 'deny');
    }

    public function managedGroups()
    {
        return $this->hasMany(Group::class, 'manager_id');
    }

    public function participatedGroups()
    {
        return $this->belongsToMany(Group::class)
            ->wherePivot('deleted_at', null)
            ->withPivot('deleted_at');
    }

    public function managedAttributes()
    {
        return $this->hasMany(Attribute::class, 'manager_id');
    }

    public function managedDefaultSettings()
    {
        return $this->hasMany(DefaultSetting::class, 'manager_id');
    }


    public function androidDeviceTokens()
    {
        return $this->hasMany(AndroidDeviceToken::class);
    }


    /**
     * ポリシーで使用するメソッド
     */
    public function hasTheFriend(User $friend)
    {
        return $this->friends()->where('id', $friend->id)->exists();
    }

    public function hasTheGroup(Group $group)
    {
        return $this->managedGroups()->where('id', $group->id)->exists();
    }

    public function hasTheSession(Session $session)
    {
        return $this->managedSessions()->where('id', $session->id)->exists();
    }

    public function hasTheAttribute(Attribute $attribute)
    {
        return $this->managedAttributes()->where('id', $attribute->id)->exists();
    }

    public function hasTheDefaultSetting(DefaultSetting $defaultSetting)
    {
        return $this->managedDefaultSettings()->where('id', $defaultSetting->id)->exists();
    }

    public function participatedTheSession(Session $session)
    {
        return $this->participatedSessions()->where('id', $session->id)->exists();
    }

    public function deviceTokenArray()
    {
        return $this->androidDeviceTokens()->pluck('device_token')->toArray();
    }
}
