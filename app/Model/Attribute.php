<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends Model
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

        static::deleting(function (Attribute $attribute) {
            $attribute->manager->allFriends()->wherePivot('attribute_id', $attribute->id)->get()->each(function (User $user) {
                $user->pivot->attribute_id = null;
                $user->pivot->save();
            });
        });
    }

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }
}
