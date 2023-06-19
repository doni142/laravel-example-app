<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Teszt extends Controller
{
    public function show ():View
    {
        return view('enyem', [
            'csinald' => \App\Models\Todo::all(),
        ]);
    }
}
