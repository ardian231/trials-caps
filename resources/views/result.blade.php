@extends('layouts.app')

@section('content')
<div class="container">
    @if ($status == 'terima oleh sistem')
        <h4><b>UMKM Diterima</b></h4>
        <p><b>Nama Usaha : {{ $nama_usaha }} </b></p> <br>
        <h5><b>Rekomendasi Investor :</b></h5>
        <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%;">
    <thead>
        <tr>
            <th style="text-align: center; background-color: #f2f2f2; border-right: 1px solid black; border-bottom: 1px solid black;">Nama Investor</th>
            <th style="text-align: center; background-color: #f2f2f2; border-right: 1px solid black; border-bottom: 1px solid black;">Email</th>
            <th style="text-align: center; background-color: #f2f2f2; border-bottom: 1px solid black;">No Telepon</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($investors as $investor)
            <tr>
                <td style="text-align: center; border-right: 1px solid black; border-bottom: 1px solid black;">{{ $investor['nama_investor'] }}</td>
                <td style="text-align: center; border-right: 1px solid black; border-bottom: 1px solid black;">{{ $investor['email'] }}</td>
                <td style="text-align: center; border-bottom: 1px solid black;">{{ $investor['no_telepon'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

    @else
        <h4><b>UMKM Ditolak</b></h4>
        <p><b>Nama Usaha : {{ $nama_usaha }}</b></p> 
        <h5><b>Mohon Maaf, Usaha Anda Belum Memenuhi Kriteria Investasi.</b></h5> <br> <br>
        <p>Berikut adalah beberapa alasan umum mengapa usaha ditolak :</p>
        <ol>
        <li>Usaha ini belum memiliki riwayat operasional yang cukup panjang untuk memenuhi persyaratan.</li>
        <li>Omset tahunan dari usaha ini belum mencapai level yang diharapkan.</li>
        <li>Permohonan modal usaha tidak seimbang dengan omset yang saat ini dihasilkan oleh usaha ini.</li>
    </ol>
    <p>Terima Kasih Atas Pengertian dan Kerjasamanya.</p>
    @endif
</div>
@endsection
