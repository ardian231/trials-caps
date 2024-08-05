@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-weight: bold; text-align:center;">{{ __('You are logged in!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4 class="text-2xl" style="font-weight: bold; text-align:center; font-size:25px;">{{ __('Silakan Isi Data Diri Anda!') }}</h4>

                    <div class="container mx-auto px-4 py-8">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
