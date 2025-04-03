<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AprendizController extends Controller
{
    public function dashboard()
    {
        return view('aprendiz.dashboard');
    }
}
