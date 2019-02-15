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
