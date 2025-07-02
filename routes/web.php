<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::post('/generateExercises', [MainController::class, 'generateExercises'])->name('generateExercises');
Route::get('/printExercises', [MainController::class, 'printExercises'])->name('printExercises');
Route::get('/exportExercises', [MainController::class, 'exportExercises'])->name('exportExercises');
