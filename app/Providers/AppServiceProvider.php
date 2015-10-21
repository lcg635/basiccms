<?php

namespace App\Providers;

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
        error_reporting(E_ALL ^ E_NOTICE);

        date_default_timezone_set(env('APP_TIMEZONE', 'Asia/Shanghai'));
    }
}
