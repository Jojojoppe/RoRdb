<?php

namespace RoRdb\App\Providers;

use RoRdb\Illuminate\Support\Facades\Gate;
use RoRdb\Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = ['RoRdb\\App\\Model' => 'RoRdb\\App\\Policies\\ModelPolicy'];
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //
    }
}
