<?php

namespace App\Http\Controllers;
use App\karyailmiah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin;

class AdminController extends Controller
{

    public function index()
    {
        $admin = Admin::all();
        return view('admin.adminprofile', compact('admin'));
    }

    public function edit($id)
    {
        $admin = DB::table('admin')->where('Id_admin',$id)->first();
        return view('admin.admineditprofile', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        DB::table('admin')->where('Id_admin',$id)->update([
            'Nama_admin' => $request->Nama_admin,
            'Email' => $request->Email,
            'No_telp' => $request->No_telp
        ]);
        return redirect()->route('admin.index')->with('success', 'Data berhasil di edit');
    }

    public function adminkoleksi(Request $request){
        if ($request->has('cari')){
            $karyailmiah = karyailmiah::where("Status","=","Published")->where('Judul','LIKE','%' . $request->cari . '%')->paginate(10);
        }else{
            $karyailmiah = karyailmiah::where("Status","=","Published")->paginate(10);
            //$karyailmiah = karyailmiah::find($id);
           // return karyailmiah::download($karyailmiah->path, $karyailmiah->Judul);
        }
        return view('/admin/koleksi', compact('karyailmiah'));
    
    }
    public function adminprodi(Request $request){
        if ($request->has('cari')){
            $karyailmiah = karyailmiah::where('Judul','LIKE','%' . $request->cari . '%')->get();    
        }else{
            $karyailmiah = karyailmiah::all();
        }
        return view('/admin/prodi', compact('karyailmiah'));
    
    }
    public function admintentang(){
        return view('/admin/tentang');
    
    }

    public function adminpenulis(Request $request){
        if($request->has('cari')){
            $penulis = karyailmiah::where("Status","=","Published")->where('Penulis','LIKE','%' . $request->cari . '%')->paginate(10);
        } else{
            $penulis = karyailmiah::where("Status","=","Published")->paginate(10);
        }
        return view('/admin/penulis', compact('penulis'));
    }

    public function sisteminformasi(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","S1 Sistem Informasi")->where("Status","=","Published")->paginate(10);
        return view('/adminprodi/sisteminformasi', compact('karyailmiah'));
    }

    public function informatika(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","S1 Informatika")->where("Status","=","Published")->paginate(10);
        return view('/adminprodi/informatika', compact('karyailmiah'));
    }
    
    public function teknologikomputer(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","D3 Teknologi Komputer")->where("Status","=","Published")->paginate(10);
        return view('/adminprodi/teknologikomputer', compact('karyailmiah'));
    }
    
    public function teknikelektro(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","S1 Teknik Elektro")->where("Status","=","Published")->paginate(10);
        return view('/adminprodi/teknikelektro', compact('karyailmiah'));
    }
    
    public function trpl(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","D4 Teknologi Rekayasa Perangkat Lunak")->where("Status","=","Published")->paginate(10);
        return view('/adminprodi/trpl', compact('karyailmiah'));
    }
    
    public function teknologiinformasi(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","D3 Teknologi Informasi")->where("Status","=","Published")->paginate(10);
        return view('/adminprodi/teknologiinformasi', compact('karyailmiah'));
    }
    
    public function manajemenrekayasa(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","S1 Manajemen Rekayasa")->where("Status","=","Published")->paginate(10);
        return view('/adminprodi/manajemenrekayasa', compact('karyailmiah'));
    }
    
    public function teknikbioproses(){
        $karyailmiah = karyailmiah::where("ProgramStudi","=","S1 Teknik Bioproses")->where("Status","=","Published")->paginate(10);
        return view('/adminprodi/teknikbioproses', compact('karyailmiah'));
    }

    public function getAllReject(Request $request){
        if ($request->has('cari')){
            $file = karyailmiah::where("Status","=","Rejected")->where('Judul','LIKE','%' . $request->cari . '%')->paginate(10);
        }else{
            $file = karyailmiah::where("Status","=","Rejected")->paginate(10);
        }
        return view('admin.rejectedkaryailmiah', compact('file'));
    }

    public function publish($id){
        $data = karyailmiah::find($id);
        $data->status = "Published";
        $data->save();
        return redirect('/admin/koleksi');
    }

    public function reject($id){ 
        $data = karyailmiah::find($id);
        $data->status = "Rejected";
        $data->save();
        return redirect('/rejected');
    }

    public function download($file){
       // $data = karyailmiah::find($id);
       // return Storage::download($data->path, $data->title);
       return response()->download('storage/'.$file);
    }

    public function unduh($file){
        return response()->download('Abstrak/'.$file);
    }
}
