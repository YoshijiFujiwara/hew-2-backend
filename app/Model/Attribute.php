<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $guarded = ['manager_id', 'id'];

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }
}
