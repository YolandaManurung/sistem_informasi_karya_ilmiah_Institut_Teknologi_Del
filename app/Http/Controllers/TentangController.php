<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    //
    public function About(){
        return view ('Tentang.About');
    }
}
