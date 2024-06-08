<?php

namespace App\Http\Controllers;
use app\Models\Investor;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $umkmData = UMKM::orderBy('created_at', 'desc')->take(20)->get();
        $totalUmkm = UMKM::count(); // Menambahkan perhitungan total UMKM
        return view('admin.dashboard', compact('umkmData', 'totalUmkm'));
    }

    public function show($id)
    {
        $umkmData = UMKM::findOrFail($id);
        return view('admin.umkm_detail', compact('umkmData'));
    }
}

