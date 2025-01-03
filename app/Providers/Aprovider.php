<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Acontroller;
use App\Http\Controllers\Basecontroller;

class Aprovider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(Acontroller::class, function($app) {
            // Acontroller 불러와서 그 안에서 Basecontroller 추가로 불러오므로
            return new Acontroller($app->make(Basecontroller::class));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
