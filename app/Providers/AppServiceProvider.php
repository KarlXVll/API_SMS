<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(MyService::class, function ($app) {
            return new MyService();
        });
    }

    public function boot()
    {
        Schema::defaultStringLength(191);
        Blueprint::macro('timestamps', function () {
            $this->timestamp('created_at')->nullable();
            $this->timestamp('updated_at')->nullable();
        });
    }
}
