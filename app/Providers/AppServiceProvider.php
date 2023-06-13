<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Sereny\NovaPermissions\Nova\Permission;
use Sereny\NovaPermissions\Nova\Role;
use Sereny\NovaPermissions\NovaPermissions;

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
        fake()->addProvider(new \Xvladqt\Faker\LoremFlickrProvider(fake()));

        // Maybe there is a better place to set this, but for now it's fine.
        Permission::$group = 'System';
        Role::$group = 'System';
    }
}
