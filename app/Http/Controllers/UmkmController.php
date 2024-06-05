<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UmkmController extends Controller
{   
    
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        // Logika untuk method create
        return view('umkm.create');
    }
    public function index()
    {
        // Ambil semua data UMKM dari database
        $umkms = Umkm::all();
        
        // Kirim data UMKM ke view
        return view('umkm.index', compact('umkms'));
    }
    public function show($id)
    {
        $umkm = UMKM::findOrFail($id);
        return view('admin.umkm_detail', compact('umkm'));
    }
      public function ditolakSistem()
    {
        $umkmData = UMKM::where('status', 'tolak oleh sistem')->get();
        return view('admin.umkm_ditolak', compact('umkmData'));
    }

    public function diterimaSistem()
    {
      $umkmData = UMKM::where('status', 'terima oleh sistem')->orderBy('created_at', 'desc')->take(1)->get();
      return view('admin.umkm_diterima', compact('umkmData'));

    }
    public function store(Request $request)
    {
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

        // Menyimpan data UMKM
        $umkm = new Umkm();
        $umkm->nama_pemilik = $request->nama_pemilik;
        $umkm->nama_usaha = $request->nama_usaha;
        $umkm->email = $request->email;
        $umkm->kategori_usaha = $request->kategori_usaha;
        $umkm->jenis_usaha = $request->jenis_usaha;
        $umkm->lama_usaha = $request->lama_usaha;
        $umkm->jumlah_karyawan = $request->jumlah_karyawan;
        $umkm->omset_tahunan = $request->omset_tahunan;
        $umkm->jenis_investasi = $request->jenis_investasi;
        $umkm->modal_diinginkan = $request->modal_diinginkan;
        $umkm->lokasi = $request->lokasi;
        $umkm->save();
        
        return redirect()->back()->with('success', 'Data UMKM berhasil disimpan!');
    }
}
