<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Session extends Model
{
    use SoftDeletes;

    protected $guarded = ['manager_id', 'id', 'created_at', 'updated_at', 'deleted_at'];
    protected $dates = ['deleted_at'];

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::deleting(function (Session $session) {
            // デリート時でも残す
//            $session->users()->get()->each(function (User $user) {
//                $user->pivot->deleted_at = now();
//                $user->pivot->save();
//            });
        });
    }

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->wherePivot('deleted_at', null)
            ->withPivot('join_status', 'paid', 'attribute_name', 'plus_minus', 'deleted_at');
    }

    public function allowUsers()
    {
        return $this->users()->wherePivot('join_status', 'allow');
    }

    public function denyUsers()
    {
        return $this->users()->wherePivot('join_status', 'deny');
    }

    public function waitUsers()
    {
        return $this->users()->wherePivot('join_status', 'wait');
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id', 'shop_id');
    }

    /**
     * ポリシーで使用する
     */
    public function hasTheUser(User $user)
    {
        return $this->users()->where('id', $user->id)->exists();
    }
}
