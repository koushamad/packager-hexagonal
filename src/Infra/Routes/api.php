<?php

use Illuminate\Support\Facades\Route;
use :uc:vendor\:uc:package\Infra\Http\Controllers\PingController;
use :uc:vendor\:uc:package\Infra\Http\Middleware\CanPing;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix(':lc:vendor/:lc:package/api/')
    ->middleware(CanPing::class)
    ->group(function () {
        Route::prefix('v1/')
            ->group(function () {
                Route::get('ping', [PingController::class, 'ping'])->name('ping');
            });
    });
