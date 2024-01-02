<?php

use Coleus\System\Http\Controller\SystemController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('system.route_prefix', 'system'),
    'as' => config('system.route_prefix', 'system.'),
    // 'middleware' => HandleInertiaRequests::class,
], function () {
    Route::middleware(['web', 'auth'])->group(function () {
        Route::get('/', [SystemController::class, 'index']);
    });
});
