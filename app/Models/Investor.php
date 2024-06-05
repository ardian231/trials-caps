<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_investor', 'jenis_investasi', 'pengalaman_investasi', 'modal_investasi', 
        'jenis_umkm', 'kategori_umkm', 'lama_umkm', 'jumlah_karyawan', 
        'omset_tahunan', 'email', 'no_telepon'
    ];
}
