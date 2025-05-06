<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealProgramController extends Controller
{
    public function index()
    {
        return view('mealprogram'); 
    }
}
