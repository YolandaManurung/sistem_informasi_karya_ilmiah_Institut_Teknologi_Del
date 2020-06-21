<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\karyailmiah;

class CivitasController extends Controller
{
    public function civitaseditprofile(){
        return view('civitaseditprofile');
    }

    public function civitasprofile(){
        return view('civitasprofile');
    }
    
    public function civitaskaryailmiah(Request $request){
        if ($request->has('cari')){
            $karyailmiah = karyailmiah::where("Status","!=","Requested")->where('Judul','LIKE','%' . $request->cari . '%')->paginate(10);    
        }else{
            $karyailmiah = karyailmiah::where("Status","!=","Requested")->paginate(10);
        }
        return view('civitaskaryailmiah', compact('karyailmiah'));
    }

    public function civitaspenulis(Request $request){
        if ($request->has('cari')){
            $penulis = karyailmiah::where("Status","=","Published")->where('Penulis','LIKE','%' . $request->cari . '%')->paginate(10);    
        }else{
            $penulis = karyailmiah::where("Status","=","Published")->paginate(10);
        }
        return view('civitaspenulis', compact('penulis'));
    }

    public function civitastentang(){
        return view('civitastentang');
    }

    public function civitasprodi(){
        return view('civitasprodi');
    }
    public function civitasrequest(){
        
        $karyailmiah = karyailmiah::all();
        return view('civitaskaryailmiah');
    }
    public function informasi(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","S1 Sistem Informasi")->where("Status","=","Published")->paginate(10);
        return view('/civitasprodi/informasi', compact('karyailmiah'));
    }
    public function elektro(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","S1 Teknik Elektro")->where("Status","=","Published")->paginate(10);
        return view('/civitasprodi/elektro', compact('karyailmiah'));
    }
    public function ti(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","S1 Informatika")->where("Status","=","Published")->paginate(10);
        return view('/civitasprodi/ti', compact('karyailmiah'));
    }
    public function teknologirekayasa(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","D4 Teknologi Rekayasa Perangkat Lunak")->where("Status","=","Published")->paginate(10);
        return view('/civitasprodi/teknologirekayasa', compact('karyailmiah'));
    }
    public function d3ti(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","D3 Teknologi Informasi")->where("Status","=","Published")->paginate(10);
        return view('/civitasprodi/d3ti', compact('karyailmiah'));
    }
    public function komputer(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","D3 Teknologi Komputer")->where("Status","=","Published")->paginate(10);
        return view('/civitasprodi/komputer', compact('karyailmiah'));
    }
    public function bioproses(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","S1 Teknik Bioproses")->where("Status","=","Published")->paginate(10);
        return view('/civitasprodi/bioproses', compact('karyailmiah'));
    }
    public function mr(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","S1 Manajemen Rekayasa")->where("Status","=","Published")->paginate(10);
        return view('/civitasprodi/mr', compact('karyailmiah'));
    }
}
