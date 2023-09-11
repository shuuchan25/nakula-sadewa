<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
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

        Validator::extend('max_files', function ($attribute, $value, $parameters, $validator) {
            $maxFiles = intval($parameters[0]);
            $uploadedFiles = is_array($value) ? count($value) : 0;
            
            return $uploadedFiles <= $maxFiles;
        });
    }
}