<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\karyailmiah;

class ProdiController extends Controller
{
    //
    public function prodi(){
        return view('prodi');
    }

    public function s1si(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","S1 Sistem Informasi")->where("Status","=","Published")->paginate(10);
        return view('/visitorprodi/s1si', compact('karyailmiah'));
    }

    public function s1te(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","S1 Teknik Elektro")->where("Status","=","Published")->paginate(10);
        return view('/visitorprodi/s1te', compact('karyailmiah'));
    }

    public function s1info(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","S1 Informatika")->where("Status","=","Published")->paginate(10);
        return view('/visitorprodi/s1info', compact('karyailmiah'));
    }

    public function d4trpl(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","D4 Teknologi Rekayasa Perangkat Lunak")->where("Status","=","Published")->paginate(10);
        return view('/visitorprodi/d4trpl', compact('karyailmiah'));
    }

    public function diplomati(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","D3 Teknologi Informasi")->where("Status","=","Published")->paginate(10);
        return view('/visitorprodi/diplomati', compact('karyailmiah'));
    }

    public function d3tk(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","D3 Teknologi Komputer")->where("Status","=","Published")->paginate(10);
        return view('/visitorprodi/d3tk', compact('karyailmiah'));
    }

    public function s1bp(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","S1 Teknik Bioproses")->where("Status","=","Published")->paginate(10);
        return view('/visitorprodi/s1bp', compact('karyailmiah'));
    }
    
    public function s1mr(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","S1 Manajemen Rekayasa")->where("Status","=","Published")->paginate(10);
        return view('/visitorprodi/s1mr', compact('karyailmiah'));
    }
}
