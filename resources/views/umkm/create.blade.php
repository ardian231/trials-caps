@extends('layouts.app')

@section('content')
<section class="container py-5">
    <h1 class="col-12 col-xl-8 h2 text-left text-primary pt-3">Masukkan data diri anda disini!</h1>
    <p class="col-12 col-xl-8 text-left text-muted pb-5 light-300">
        <strong>Perhatikan jangan sampai ada nama bahkan ketikan yang salah agar tim kami bisa melayani anda dengan baik!</strong>
    </p>

    <!-- Start Contact Form -->
    <div class="col-lg-8 mx-auto">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form class="contact-form row" method="post" action="{{ route('umkm.store') }}" role="form" enctype="multipart/form-data">
            @csrf

            <div class="col-lg-6 mb-4">
                <div class="form-floating">
                    <input type="text" class="form-control form-control-lg light-300" id="nama_pemilik" name="nama_pemilik" placeholder="Nama Pemilik" style="font-size: 13px;" required>
                    <label for="nama_pemilik" class="light-300" >Nama Pemilik</label>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="form-floating">
                    <input type="text" class="form-control form-control-lg light-300" id="nama_usaha" name="nama_usaha" placeholder="Nama Usaha" style="font-size: 13px;"  required>
                    <label for="nama_usaha" class="light-300">Nama Usaha</label>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="form-floating">
                    <select class="form-select form-control-lg light-300" id="jenis_usaha" name="jenis_usaha" style="font-size: 13px;"  required>
                    <option value="" hidden>Pilih Usaha</option>
                        <option value="pakaian">Pakaian</option>
                        <option value="kuliner">Kuliner</option>
                        <option value="laundry">Laundry</option>
                        <option value="fotocopy/percetakan">Fotocopy/Percetakan</option>
                        <option value="bengkel/sparepart">Bengkel/Sparepart</option>
                        <option value="toko kelontong">Toko Kelontong</option>
                        <option value="toko bangunan">Toko Bangunan</option>
                        <option value="peralatan listrik">Peralatan Listrik</option>
                        <option value="toko buku">Toko Buku</option>
                        <option value="toko ponsel">Toko Ponsel</option>
                        <option value="usaha/jasa lainnya">Usaha/Jasa Lainnya</option>
                    </select>
                    <label for="jenis_usaha" class="light-300">Jenis Usaha</label>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div>
                    <label class="form-label" style="font-size: 15px;" >Kategori Usaha</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="kategori_usaha" id="online" value="online" required>
                        <label class="form-check-label" for="online">Online</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="kategori_usaha" id="offline" value="offline" required>
                        <label class="form-check-label" for="offline">Offline</label>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="form-floating">
                <select class="form-select form-control-lg light-300" id="lama_usaha" name="lama_usaha" style="font-size: 13px;" required>
                        <option value="" hidden>Lama Usaha</option>
                        <option value="≤1"> ≤ 1 Tahun</option>
                        <option value="2">2 Tahun</option>
                        <option value="3">3 Tahun</option>
                        <option value="4">4 Tahun</option>
                        <option value="5">5 Tahun</option>
                        <option value="6">6 Tahun</option>
                        <option value="7">7 Tahun</option>
                        <option value="8">8 Tahun</option>
                        <option value="9">9 Tahun</option>
                        <option value="≥10"> ≥ 10 Tahun </option>
                    </select>
                    <label for="lama_usaha" class="light-300">Lamanya Usaha</label>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="form-floating">
                    <select class="form-select form-control-lg light-300" id="jumlah_karyawan" name="jumlah_karyawan" style="font-size: 13px;"  required>
                        <option value="" hidden>Jumlah Karyawan</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="≥10"> ≥ 10 </option>
                    </select>
                    <label for="jumlah_karyawan" class="light-300">Jumlah Karyawan</label>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="form-floating">
                    <select class="form-select form-control-lg light-300" id="omset_tahunan" name="omset_tahunan" style="font-size: 13px;" required>
                        <option value="" hidden>Omset Tahunan</option>
                        <option value="≤10"> ≤ 10 Juta </option>
                        <option value="11-20">11-20 Juta</option>
                        <option value="21-30">21-30 Juta</option>
                        <option value="31-40">31-40 Juta</option>
                        <option value="41-50">41-50 Juta</option>
                        <option value="51-60">51-60 Juta</option>
                        <option value="61-70">61-70 Juta</option>
                        <option value="71-80">71-80 Juta</option>
                        <option value="81-90">81-90 Juta</option>
                        <option value="91-100">91-100 Juta</option>
                        <option value=">100"> > 100 Juta </option>
                    </select>
                    <label for="omset_tahunan" class="light-300">Omset Tahunan</label>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="form-floating">
                    <select class="form-select form-control-lg light-300" id="jenis_investasi" name="jenis_investasi" style="font-size: 13px;"  required>
                        <option value="" hidden>Jenis Investasi</option>
                        <option value="Pemberi Modal">Pemberi Modal</option>
                        <option value="Rekan Kerja">Rekan Kerja</option>
                        <option value="Pemberi Pinjaman">Pemberi Pinjaman</option>
                    </select>
                    <label for="jenis_investasi" class="light-300">Jenis Investasi</label>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="form-floating">
                    <select class="form-select form-control-lg light-300" id="modal_diinginkan" name="modal_diinginkan" style="font-size: 13px;"  required>
                        <option value="" hidden>Modal yang diinginkan</option>
                        <option value="≤10"> ≤ 10 Juta </option>
                        <option value="11-50">11 - 50 Juta</option>
                        <option value="51-100">51 - 100 Juta</option>
                        <option value="101-200">101 - 200 Juta</option>
                        <option value="201-300">201 - 300 Juta</option>
                        <option value="301-400">301 - 400 Juta</option>
                        <option value=">500"> > 500 Juta </option>
                    </select>
                    <label for="modal_diinginkan" class="light-300">Modal yang diinginkan</label>
                </div>
            </div>

            <div class="col-12 mb-4">
                <div class="form-floating">
                    <textarea class="form-control light-300" rows="8" id="lokasi" name="lokasi" placeholder="Lokasi Usaha" style="font-size: 13px;" required></textarea>
                    <label for="lokasi" class="light-300">Lokasi Usaha</label>
                </div>
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>
    </div>
    <!-- End Contact Form -->
</section>
@endsection



