<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'Id_admin';
    protected $guarded=[];
    protected $fillable = ['Nama_admin','Email','No_telp', 'Tanggal_publish'];
}