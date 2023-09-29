<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        Gate::define('superadmin', function (User $user) {
            return strcasecmp($user->role->name, 'Superadmin') === 0;
        });

        Gate::define('admin-atraksi', function (User $user) {
            return strcasecmp($user->role->name, 'Admin Atraksi') === 0;
        });

        Gate::define('admin-akomodasi', function (User $user) {
            return strcasecmp($user->role->name, 'Admin Akomodasi') === 0;
        });

        Gate::define('admin-kuliner', function (User $user) {
            return strcasecmp($user->role->name, 'Admin Kuliner') === 0;
        });

        Gate::define('admin-biro', function (User $user) {
            return strcasecmp($user->role->name, 'Admin Biro Perjalanan') === 0;
        });
    }
}