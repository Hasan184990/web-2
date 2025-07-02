<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'Pegawai';

    protected $fillable = ['Nip', 'Nama', 'Unit_kerja_id']; 
}
