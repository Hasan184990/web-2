<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $table = 'Ruang';

    protected $fillable = ['Kode', 'Nama', 'Status'];
}
