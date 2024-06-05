@extends('layouts.admin')

@section('content')

<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h4 class="mb-4">UMKM Yang Mengajukan Proposal</h4>
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="mb-3">
                    <h5>Nama Usaha</h5>
                    <p>{{ $umkm->nama_usaha }}</p>
                </div>
                <div class="mb-3">
                    <h5>Nama Pemilik</h5>
                    <p>{{ $umkm->nama_pemilik }}</p>
                </div>
                <div class="mb-3">
                    <h5>Kategori Usaha</h5>
                    <p>{{ $umkm->kategori_usaha }}</p>
                </div>
                <div class="mb-3">
                    <h5>Jenis Usaha</h5>
                    <p>{{ $umkm->jenis_usaha }}</p>
                </div>
                <div class="mb-3">
                    <h5>Lama Usaha</h5>
                    <p>{{ $umkm->lama_usaha }}</p>
                </div>
                <div class="mb-3">
                    <h5>Jumlah Karyawan</h5>
                    <p>{{ $umkm->jumlah_karyawan }}</p>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="mb-3">
                    <h5>Omset Tahunan</h5>
                    <p>{{ $umkm->omset_tahunan }}</p>
                </div>
                <div class="mb-3">
                    <h5>Jenis Investasi</h5>
                    <p>{{ $umkm->jenis_investasi }}</p>
                </div>
                <div class="mb-3">
                    <h5>Modal</h5>
                    <p>{{ $umkm->modal }}</p>
                </div>
                <div class="mb-3">
                    <h5>Lokasi</h5>
                    <p>{{ $umkm->lokasi }}</p>
                </div>
                <div class="mb-3">
                    <h5>Status</h5>
                    <a href="">{{ $umkm->status }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->

@endsection
