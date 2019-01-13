<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $guarded = ['manager_id'];

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('join_status', 'paid', 'plus_minus', 'ratio');
    }

    /**
     * ポリシーで使用する
     */
    public function hasTheUser(User $user)
    {
        return $this->users()->where('id', $user->id)->exists();
    }
}
