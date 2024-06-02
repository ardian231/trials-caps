<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UmkmController extends Controller
{   
    
    public function create()
    {
        // Logika untuk method create
        return view('umkm.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pemilik' => 'required|string|max:255',
            'nama_usaha' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'kategori_usaha' => 'required|string',
            'jenis_usaha' => 'required|string',
            'lamanya_usaha' => 'required|string',
            'jumlah_karyawan' => 'required|string',
            'omset_tahunan' => 'required|string',
            'jenis_investasi' => 'required|string',
            'modal_diinginkan' => 'required|string',
            'lokasiusaha' => 'required|string',
            'proposal' => 'required|file|mimes:pdf,doc,docx|max:2048'
        ]);

        // Mengunggah file proposal
        $proposalPath = $request->file('proposal')->store('proposals');

        // Menyimpan data UMKM
        $umkm = new Umkm();
        $umkm->nama_pemilik = $request->nama_pemilik;
        $umkm->nama_usaha = $request->nama_usaha;
        $umkm->email = $request->email;
        $umkm->kategori_usaha = $request->kategori_usaha;
        $umkm->jenis_usaha = $request->jenis_usaha;
        $umkm->lamanya_usaha = $request->lamanya_usaha;
        $umkm->jumlah_karyawan = $request->jumlah_karyawan;
        $umkm->omset_tahunan = $request->omset_tahunan;
        $umkm->jenis_investasi = $request->jenis_investasi;
        $umkm->modal_diinginkan = $request->modal_diinginkan;
        $umkm->lokasiusaha = $request->lokasiusaha;
        $umkm->proposal = $proposalPath;
        $umkm->save();
        
        return redirect()->back()->with('success', 'Data UMKM berhasil disimpan!');
    }
}
