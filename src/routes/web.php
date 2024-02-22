<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => '\NunoMaduro\SkeletonPhp\Http\Controllers'], function () {
    Route::get('cron-manager', 'CronManagerController@index')->name('index');
});
