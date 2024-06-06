<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmkmApiController extends Controller
{
    public function analisisUmkm(Request $request)
    {
        // Validasi data yang diterima dari request
        $validated = $request->validate([
            'nama_pemilik' => 'required|string|max:255',
            'nama_usaha' => 'required|string|max:255',
            'jenis_usaha' => 'required|in:pakaian,kuliner,laundry,fotocopy/percetakan,bengkel/sparepart,toko kelontong,toko bangunan,peralatan listrik,toko buku,toko ponsel,usaha/jasa lainnya',
            'kategori_usaha' => 'required|in:online,offline',
            'lama_usaha' => 'required|in:≤1,2,3,4,5,6,7,8,9,≥10',
            'jumlah_karyawan' => 'required|in:1,2,3,4,5,6,7,8,9,≥10',
            'omset_tahunan' => 'required|in:≤10,11-20,21-30,31-40,41-50,51-60,61-70,71-80,81-90,91-100,>100',
            'jenis_investasi' => 'required|in:pemberi modal,rekan kerja,pemberi pinjaman',
            'modal_diinginkan' => 'required|in:≤10,11-50,51-100,101-200,201-300,301-400,400-500,>500',
            'lokasi' => 'required|string|max:255'
        ]);

        // Dummy logic untuk simulasi analisis UMKM oleh machine learning
        // Anda bisa menggantinya dengan logika yang sesuai dengan model machine learning Anda

        // Contoh sederhana: Jika omset tahunan lebih dari 50, diterima; jika tidak, ditolak
        $status = 'tolak oleh sistem';
        if ($validated['omset_tahunan'] === '>100' || $validated['modal_diinginkan'] === '>500') {
            $status = 'terima oleh sistem';
        }

        // Kembalikan respons dengan format yang diharapkan
        return response()->json([
            [
                'status' => $status
            ]
        ]);
    }
}

