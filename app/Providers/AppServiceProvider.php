<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Gate::define('isAdmin', function($user) {
            return $user->role == 1;
        });

        Gate::define('isPejabat', function($user) {
            return $user->role == 2;
        });

        Gate::define('isPNS', function($user) {
            return $user->role == 3;
        });

        Gate::define('isBoleh', function($user) {
            if ($user->role = 1 || $user->role = 2)
            {
                return true;
            }
            return false;
        });
    }
}
