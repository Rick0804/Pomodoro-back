<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PomodoroController;



Route::prefix('pom')->group(function () {
    Route::post('/send', [PomodoroController::class, 'store'])->name('store-pom');
});
