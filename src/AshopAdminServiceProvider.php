<?php

namespace Ashop\Admin;

use Illuminate\Support\ServiceProvider;

class AshopAdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if(!$this->app->routesAreCached()){
            require __DIR__.'/Routes/web.php';
        }
        $this->loadViewsFrom(base_path('resources/views'), 'admin');
        $this->publishes([
            __DIR__.'/Views' => base_path('resources/views')
        ]);

        $this->publishes([
            __DIR__.'/Assets' => public_path('admin/assets'),
        ], 'public');

        $this->publishes([
            __DIR__.'/Migrations' => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
