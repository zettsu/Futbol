<?php

namespace Futbol\Providers;

use Futbol\Policies\ModelPolicy;
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
        User::class => ModelPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Custom policies
        Gate::define('dash', 'Futbol\Policies\ModelPolicy@dash');
        Gate::define('createrole', 'Futbol\Policies\ModelPolicy@createRole');
        Gate::define('usercreate', 'Futbol\Policies\ModelPolicy@createUser');

    }
}
