<?php

namespace App;

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
            $user->allFriendedUsers()->get()->each(function (User $user) {
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
        'password', 'remember_token',
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

    public function friends()
    {
        return $this->allFriends()->wherePivot('permitted', true);
    }

    public function allFriends()
    {
        return $this->belongsToMany(self::class, 'user_friends', 'user_id', 'friend_id')
            ->wherePivot('deleted_at', null)
            ->withPivot('attribute_id', 'permitted', 'deleted_at');
    }

    public function blockedFriends()
    {
        return $this->allFriends()->wherePivot('permitted', false);
    }

    public function waitingFriends()
    {
        return $this->allFriends()->wherePivot('permitted', null);
    }

    /**
     * 自分を友たちとして追加しているユーザー
     */
    public function allFriendedUsers()
    {
        return $this->belongsToMany(self::class, 'user_friends', 'friend_id', 'user_id')
            ->wherePivot('deleted_at', null)
            ->withPivot('attribute_id', 'permitted', 'deleted_at');
    }

    public function invitingUsers()
    {
        return $this->allFriendedUsers()->wherePivot('permitted', null);
    }

    public function friendedUsers()
    {
        return $this->allFriendedUsers()->wherePivot('permitted', true);
    }

    public function blockingUsers()
    {
        return $this->allFriendedUsers()->wherePivot('permitted', false);
    }

    public function managedSessions()
    {
        return $this->hasMany(Session::class, 'manager_id');
    }

    public function participatedSessions()
    {
        return $this->belongsToMany(Session::class)
            ->wherePivot('deleted_at', null)
            ->withPivot('join_status', 'paid', 'plus_minus', 'ratio', 'deleted_at');
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
}
