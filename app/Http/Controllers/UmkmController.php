<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;
use App\Models\Investor;
use Illuminate\Support\Facades\Http;

class UmkmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('umkm.create');
    }

    public function index()
    {
        $umkms = Umkm::all();
        return view('umkm.index', compact('umkms'));
    }

    public function show($id)
    {
        $umkm = Umkm::findOrFail($id);
        return view('admin.umkm_detail', compact('umkm'));
    }

    public function ditolakSistem()
    {
        $umkmData = Umkm::where('status', 'tolak oleh sistem')->get();
        return view('admin.umkm_ditolak', compact('umkmData'));
    }

    public function diterimaSistem()
    {
        $umkmData = Umkm::where('status', 'terima oleh sistem')->orderBy('created_at', 'desc')->take(1)->get();
        return view('admin.umkm_diterima', compact('umkmData'));
    }

    public function store(Request $request)
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
        ], [
            'nama_pemilik.required' => 'Nama pemilik harus diisi.',
            'nama_usaha.required' => 'Nama usaha harus diisi.',
            'jenis_usaha.required' => 'Jenis usaha harus diisi.',
            'kategori_usaha.required' => 'Kategori usaha harus diisi.',
            'lama_usaha.required' => 'Lama usaha harus diisi.',
            'jumlah_karyawan.required' => 'Jumlah karyawan harus diisi.',
            'omset_tahunan.required' => 'Omset tahunan harus diisi.',
            'jenis_investasi.required' => 'Jenis investasi harus diisi.',
            'modal_diinginkan.required' => 'Modal diinginkan harus diisi.',
            'lokasi.required' => 'Lokasi harus diisi.',
        ]);

        // Menyimpan data UMKM ke database
        $umkm = Umkm::create($validated);

        // Mengirim data ke model machine learning untuk analisis UMKM
        $response = Http::post('http://localhost:5000/api/analisis_umkm', $validated);

        if ($response->successful()) {
            $result = $response->json();

            // Memastikan respons memiliki format yang diharapkan
            if (isset($result[0]['status'])) {
                $status = $result[0]['status'] == 'diterima_sistem' ? 'terima oleh sistem' : 'tolak oleh sistem';
                $umkm->update(['status' => $status]);

                if ($status == 'terima oleh sistem') {
                    // Jika diterima, lanjut ke sistem rekomendasi investor
                    $investorResponse = Http::post('http://localhost:5001/api/rekomendasi_umkm', $validated);

                    if ($investorResponse->successful()) {
                        $investorIds = $investorResponse->json();

                        // Ambil data investor dari database berdasarkan ID
                        $investors = Investor::whereIn('id', $investorIds)->get();

                        return view('result', [
                            'status' => 'terima oleh sistem',
                            'investors' => $investors,
                            'nama_usaha' => $validated['nama_usaha']
                        ]);
                    } else {
                        return back()->withErrors(['msg' => 'Gagal mendapatkan rekomendasi investor.']);
                    }
                } else {
                    // Jika tidak diterima, beri tahu pengguna
                    return view('result', [
                        'status' => 'tolak oleh sistem',
                        'nama_usaha' => $validated['nama_usaha']
                    ]);
                }
            } else {
                return back()->withErrors(['msg' => 'Format respons tidak sesuai.']);
            }
        } else {
            return back()->withErrors(['msg' => 'Gagal memprediksi status UMKM.']);
        }
    }
}
