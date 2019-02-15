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

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }
}
