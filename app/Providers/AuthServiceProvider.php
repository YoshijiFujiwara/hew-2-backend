<?php

namespace App\Providers;

use App\Model\Group;
use App\Model\Session;
use App\Policies\FriendPolicy;
use App\Policies\GroupPolicy;
use App\Policies\SessionPolicy;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        User::class => FriendPolicy::class,
        Group::class => GroupPolicy::class,
        Session::class  => SessionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
