<?php

use App\Http\Controllers\Guest\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->name('guest.')->group(function () {
    Route::name('landing-page')->group(function () {
        Route::get('/', [LandingPageController::class, 'index'])->name('index');
    });
});
