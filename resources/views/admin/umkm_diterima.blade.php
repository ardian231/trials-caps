@extends('layouts.admin')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-0">Data UMKM Diterima Sistem</h4>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">Nama Usaha</th>
                        <th scope="col">Nama Pemilik</th>
                        <th scope="col">Kategori Usaha</th>
                        <th scope="col">Jenis Usaha</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($umkmData as $umkm)
                    <tr>
                        <td>{{ $umkm->nama_usaha }}</td>
                        <td>{{ $umkm->nama_pemilik }}</td>
                        <td>{{ $umkm->kategori_usaha }}</td>
                        <td>{{ $umkm->jenis_usaha }}</td>
                        <td>{{ $umkm->created_at->format('d M Y') }}</td>
                        <td><a class="btn btn-sm btn-primary" href="{{ url('admin/umkm_detail', $umkm->id) }}">Detail</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
