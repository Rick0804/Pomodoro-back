<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PomodoroController;



Route::prefix('pomos')->group(function () {
    Route::post('/send', [PomodoroController::class, 'store'])->name('store-pom');
    Route::get('/pomos-list', [PomodoroController::class, 'show'])->name('pomos-list');
    Route::get('/pomos-search/{id}', [PomodoroController::class, 'search'])->name('pomos-list');
    Route::put('/pomos-edit/{id}', [PomodoroController::class, 'update'])->name('pomos-edit');
    Route::delete('/pomos-delete/{id}', [PomodoroController::class, 'delete'])->name('pomos-delete');
});
