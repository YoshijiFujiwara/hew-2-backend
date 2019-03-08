<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use SoftDeletes;

    public function sessions()
    {
        return $this->hasMany(Session::class, 'shop_id', 'shop_id');
    }
}
