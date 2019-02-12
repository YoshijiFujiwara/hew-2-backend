<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded = ['manager_id'];

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function defaultSettings()
    {
        return $this->hasMany(DefaultSetting::class);
    }

    /**
     * ポリシーで使用する
     */
    public function hasTheUser(User $user)
    {
        return $this->users()->where('id', $user->id)->exists();
    }
}
