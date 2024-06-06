<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pemilik',
        'nama_usaha',
        'jenis_usaha',
        'kategori_usaha',
        'lamanya_usaha',
        'jumlah_karyawan',
        'omset_tahunan',
        'jenis_investasi',
        'modal_diinginkan',
        'lokasi',
        'status',
    ];
}