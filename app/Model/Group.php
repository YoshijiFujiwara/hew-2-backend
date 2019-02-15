<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use SoftDeletes;

    protected $guarded = ['manager_id', 'id'];
    protected $dates = ['deleted_at'];


    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::deleting(function (Group $group) {
            $group->users()->get()->each(function ($u) {
                $u->pivot->deleted_at = now();
                $u->pivot->save();
            });
        });
    }

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('deleted_at')
            ->wherePivot('deleted_at', null)
            ->withTimestamps();
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
