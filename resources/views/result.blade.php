@extends('layouts.app')

@section('content')
<div class="container">
    @if ($status == 'accepted')
        <h1>UMKM Diterima</h1>
        <p>Nama Usaha: {{ $nama_usaha }}</p>
        <h2>Rekomendasi Investor</h2>
        <ul>
            @foreach ($investors as $investor)
                <li>{{ $investor['nama_investor'] }} - {{ $investor['email'] }}</li>
            @endforeach
        </ul>
    @else
        <h1>UMKM Ditolak</h1>
        <p>Nama Usaha: {{ $nama_usaha }}</p>
        <p>Mohon maaf, usaha Anda belum memenuhi kriteria kami.</p>
    @endif
</div>
@endsection
