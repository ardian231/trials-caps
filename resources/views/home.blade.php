@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4 class="text-2xl font-bold mb-4 text-black text-center">{{ __('You are logged in!') }}</h4>

                     <div class="container mx-auto px-4 py-8">
                <h2 class="text-2xl font-bold mb-4 text-black text-center">Silakan Isi Data Diri Anda!</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
