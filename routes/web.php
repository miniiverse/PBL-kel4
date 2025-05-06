<?php

use App\Http\Controllers\MealProgramController;
use App\Http\Controllers\ProgramMakanController;
use App\Http\Controllers\DaftarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/program-makan', [ProgramMakanController::class, 'index'])->name('program-makan.index');

Route::get('/mealprogram', [MealProgramController::class, 'index'])->name('mealprogram.index');

Route::get('/daftar', [DaftarController::class, 'index'])->name('daftar.index');

Route::get('/program_latihan', [LatihanController::class, 'latihan']);

Route::get('/program_latihan2', [LatihanController::class, 'latihan2']);
