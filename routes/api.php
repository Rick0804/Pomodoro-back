<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PomodoroController;



Route::prefix('/')->group(function () {
    Route::post('/send', [PomodoroController::class, 'store'])->name('store-pom');
    Route::get('/pomos-list', [PomodoroController::class, 'show'])->name('pomos-list');
    Route::put('/pomos-edit/{id}', [PomodoroController::class, 'update'])->name('pomos-edit');
});
