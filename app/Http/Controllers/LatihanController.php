<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function latihan()
    {
        return view('program_latihan');
    }

    public function latihan2()
    {
    return view('program_latihan2');
    }

}
