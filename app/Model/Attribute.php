<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends Model
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

        static::deleting(function (Attribute $attribute) {
            $attribute->manager->friends()->wherePivot('attribute_id', $attribute->id)->get()->each(function ($a) {
                $a->pivot->attribute_id = null;
                $a->pivot->save();
            });
        });
    }

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }
}
