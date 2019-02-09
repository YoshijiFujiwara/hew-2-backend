<?php

namespace App;

use App\Model\Attribute;
use App\Model\Group;
use App\Model\Manager;
use App\Model\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PhpParser\Builder;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

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
            ->withPivot('attribute_id', 'permitted');
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
            ->withPivot('attribute_id', 'permitted');
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
        return $this->belongsToMany(Session::class)->withPivot('join_status', 'paid', 'plus_minus', 'ratio');
    }

    public function managedGroups()
    {
        return $this->hasMany(Group::class, 'manager_id');
    }

    public function participatedGroups()
    {
        return $this->belongsToMany(Group::class);
    }

    public function managedAttributes()
    {
        return $this->hasMany(Attribute::class, 'manager_id');
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

    public function participatedTheSession(Session $session)
    {
        return $this->participatedSessions()->where('id', $session->id)->exists();
    }
}
