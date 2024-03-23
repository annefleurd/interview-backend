<?php

use App\Http\Controllers\v1\RandomInfoController;
use Illuminate\Support\Facades\Route;

/**
 * randomInfo
 */
Route::controller(RandomInfoController::class)
    ->prefix('randominfo')
    ->group(function () {
        Route::get('/randomjoke', 'randomJoke');
    });

