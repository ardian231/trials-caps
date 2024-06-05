@extends('layouts.app')

@section('content')
    <section class="container py-5">
        <h1 class="col-12 col-xl-8 h2 text-center text-primary pt-3">Daftar UMKM</h1>
        <div class="col-lg-8 mx-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Pemilik</th>
                        <th>Nama Usaha</th>
                        <th>Jenis Usaha</th>
                        <th>Kategori Usaha</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($umkms as $umkm)
                        <tr>
                            <td>{{ $umkm->nama_pemilik }}</td>
                            <td>{{ $umkm->nama_usaha }}</td>
                            <td>{{ $umkm->jenis_usaha }}</td>
                            <td>{{ $umkm->kategori_usaha }}</td>
                            <td>{{ $umkm->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
