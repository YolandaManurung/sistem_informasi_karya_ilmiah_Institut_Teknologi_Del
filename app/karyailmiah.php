<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\karyailmiah;

class karyailmiah extends Model
{
    protected $table = 'karyailmiah';
    protected $primaryKey = 'Id_karya_ilmiah';
    protected $guarded=[];
    protected $fillable = ['Judul','Deskripsi','Penulis', 'ProgramStudi','JenisKaryaIlmiah', 'File','Abstract'];
}


