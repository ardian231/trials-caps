@extends('layouts.admin')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-0">Data Investor</h4>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">Nama Investor</th>
                        <th scope="col">Jenis Investasi</th>
                        <th scope="col">Pengalaman Investasi</th>
                        <th scope="col">Modal Investasi</th>
                        <th scope="col">Jenis UMKM</th>
                        <th scope="col">Kategori UMKM</th>
                        <th scope="col">Lama UMKM</th>
                        <th scope="col">Jumlah Karyawan</th>
                        <th scope="col">Omset Tahunan</th>
                        <th scope="col">Email</th>
                        <th scope="col">No. Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($investors as $investor)
                    <tr>
                        <td>{{ $investor->nama_investor }}</td>
                        <td>{{ $investor->jenis_investasi }}</td>
                        <td>{{ $investor->pengalaman_investasi }}</td>
                        <td>{{ $investor->modal_investasi }}</td>
                        <td>{{ $investor->jenis_umkm }}</td>
                        <td>{{ $investor->kategori_umkm }}</td>
                        <td>{{ $investor->lama_umkm }}</td>
                        <td>{{ $investor->jumlah_karyawan }}</td>
                        <td>{{ $investor->omset_tahunan }}</td>
                        <td>{{ $investor->email }}</td>
                        <td>{{ $investor->no_telepon }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
