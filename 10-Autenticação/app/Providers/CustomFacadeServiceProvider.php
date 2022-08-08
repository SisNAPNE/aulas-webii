<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Facades\UserPermissions;

class CustomFacadeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        
        $this->app->bind('userpermissions',function(){
            return new UserPermissions();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
