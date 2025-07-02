<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'Peminjaman';

    protected $fillable = ['Ruang_id', 'Pegawai_id', 'Tanggal', 'Jam_mulai', 'Jam_akhir', 'Keterangan'];
}
