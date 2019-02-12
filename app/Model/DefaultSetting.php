<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class DefaultSetting extends Model
{
    protected $guarded = ['manager_id', 'id'];

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
