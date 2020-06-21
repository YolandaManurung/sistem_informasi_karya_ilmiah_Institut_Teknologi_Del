<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
//use App\KirimKI;
use App\karyailmiah;


class CivitasController1 extends Controller
{
    
    public function index(Request $request){ 
        $file =karyailmiah::all();
        return view('KirimKI.index',compact('file'));
    }

        public function UploadFiles(UserFormRequest $request){
        $data = new karyailmiah; 
        $data->Judul = $request->Judul;
        $data->Deskripsi = $request->Deskripsi;
        $data->Penulis = $request->Penulis;
        $data->Pembimbing = $request->Pembimbing;
        $data->ProgramStudi = $request->ProgramStudi;
        $data->JenisKaryaIlmiah = $request->JenisKaryaIlmiah;
        $data->Status = "Requested"; 
        if($request->file('File')){
            $file = $request->file('File');
            $time_now = date("Ymdhis");
            $filename = $time_now.'.'.$file->getClientOriginalExtension();
            $request->File->move('storage/',$filename);
            $data->File = $filename;
        }
        if($request->file('Abstract')){
            $file = $request->file('Abstract');
            $time_now = date("Ymdhis");
            $filename = $time_now.'.'.$file->getClientOriginalExtension();
            $request->Abstract->move('Abstrak/',$filename);
            $data->Abstract = $filename;
        }
        $data->save();
        return redirect('/FormAddKaryaAdmin')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('KirimKI/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(UserFormRequest $request)
    //{

    //}
//     {
//         karyailmiah::create($request->all());
//         $file = new karyailmiah; 
        
//       $data->judul = $request->judul;
//       $data->deskripsi = $request->deskripsi;
//       $data->penulis = $request->penulis;
//       $data->pembimbing = $request->penulis;
//       $data->ProgramStudi = $request->penulis;
//       $data->JenisKaryaIlmiah = $request->penulis;
//       $data->status = "Requested";
//         if($request->file('File')){
//             $file = $request->file('File');
//             $filename = $request->judul.'.'.$file->getClientOriginalExtension();
//             $request->File->move('storage/',$filename);
//             $data->File = $filename;
//         } 
//         //$data->save();

//         return redirect()->route('KirimKI.index');
//     }
    public function showDetailFile($id){
        $file = karyailmiah::find($id);
        return view('karyailmiah.detailsFile',compact('file'));
    }
    public function getAllReject(){
        $file = DB::table('karyailmiah')->where('status','Rejected')->get();
        return view('Home.homeAdminreject',compact('file'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
