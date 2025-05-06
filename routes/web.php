<?php

use App\Http\Controllers\MealProgramController;
use App\Http\Controllers\ProgramMakanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/program-makan', [ProgramMakanController::class, 'index'])->name('program-makan.index');

Route::get('/mealprogram', [MealProgramController::class, 'index'])->name('mealprogram.index');
