<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('homecivitas');
    }

    public function homeadmin()
    {
        return view('/homeadmin');
    }
}
