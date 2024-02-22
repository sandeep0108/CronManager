<?php

namespace NunoMaduro\SkeletonPhp;

use Illuminate\Support\ServiceProvider;

class CronManagerServiceProvider extends ServiceProvider
{
    //    public function register(): void
    //    {
    //        $this->app->bind('create-scheduler', function () {
    //            return new CronManagerController();
    //        });
    //    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // You can boot any resources or register any routes here if necessary
    }
}
