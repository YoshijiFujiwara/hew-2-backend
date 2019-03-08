<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use SoftDeletes;

    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];
    protected $dates = ['deleted_at'];


    public function sessions()
    {
        return $this->hasMany(Session::class, 'shop_id', 'shop_id');
    }
}
