<?php

use App\Http\Controllers\MealProgramController;
use App\Http\Controllers\ProgramMakanController;
use App\Http\Controllers\DaftarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/program-makan', [ProgramMakanController::class, 'index'])->name('program-makan.index');

Route::get('/mealprogram', [MealProgramController::class, 'index'])->name('mealprogram.index');

Route::get('/daftar', [DaftarController::class, 'index'])->name('daftar.index');

Route::get('/program_latihan', [LatihanController::class, 'latihan']);

Route::get('/program_latihan2', [LatihanController::class, 'latihan2']);
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('landing');


Route::get('/about', [AboutController::class, 'index'])->name('about');