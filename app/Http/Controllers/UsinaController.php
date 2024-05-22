<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsinaController extends Controller
{
    // view page home
    public function welcome()
    {
        return view('welcome');
    }
}
