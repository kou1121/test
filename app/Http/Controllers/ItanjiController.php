<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itanjiController extends Controller
{
    public function gettest() {
        return view('itanji');
    }
}
