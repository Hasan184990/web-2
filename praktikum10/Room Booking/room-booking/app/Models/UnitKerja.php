<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    protected $table = 'Unit_kerja';

    protected $fillable = [
        'Kode',
        'Nama',
    ];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'Unit_Kerja_Id');
    }
}
