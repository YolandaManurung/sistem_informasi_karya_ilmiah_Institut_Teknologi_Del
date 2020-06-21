<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\rejectedkaryailmiah;

class rejectedkaryailmiah extends Model
{
    protected $table = 'karyailmiah';
    protected $primaryKey = 'Id_karya_ilmiah';
    protected $guarded=[];
}


