<?php

use Illuminate\Support\Facades\Route;
use :lc:vendor\:uc:package\Infra\Http\Controllers\PingController;
use :lc:vendor\:uc:package\Infra\Http\Middleware\IsPartner;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix(':lc:vendor/:lc:package/')
    ->middleware(IsPartner::class)
    ->group(function () {
        Route::group(function () {

        });
    });
