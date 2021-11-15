<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('admin',function($user){
            return ($user->role_id==1);
        });
        Gate::define('manager',function($user){
            return ($user->role_id==1 || $user->role_id==2);
        });
        Gate::define('coach',function($user){
            return ($user->role_id==1 || $user->role_id==2 || $user->role_id==3);
        });
        Gate::define('visitors',function($user){
            return ($user->role_id==1 || $user->role_id==2 || $user->role_id==3 || $user->role_id==4);
        });
    } 
}
