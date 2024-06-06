@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<!-- Start Banner Hero -->
    <section class="bg-light">
        <div class="container py-4">
            <div class="row align-items-center justify-content-between">
                <div class="contact-header col-lg-4">
                    <h1 class="h2 pb-3 text-primary">Hubungi Kami!</h1>
                    <h3 class="h4 regular-400">Butuh bantuan yang mendesak? Kami siap membantu anda!</h3>
                    <p class="light-300">
                       Tim kami selalu tersedia dari jam 09.00 - 17.00 WIB untuk konsultasi melalui telepon. Jika ingin konsultasi melalui email, tim kami selalu tersedia 24 Jam.
                    </p>
                </div>
                <div class="contact-img col-lg-5 align-items-end col-md-4">
                    <img src="./assets/img/banner-img-01.svg">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Hero -->

    <!-- Start Footer -->
    <footer class="bg-secondary pt-4">
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-3 col-12 align-left">
                    <a class="navbar-brand" href="index.html">
                        <i class='bx bx-buildings bx-sm text-light'></i>
                        <span class="text-light h5">UMK</span> <span class="text-light h5 semi-bold-600">Vest</span>
                    </a>
                    <p class="text-light my-lg-4 my-2">
                        Sebuah platform untuk kemudahan para UMKM dan Investor demi bangsa dan negara.
                    </p>
                </div>
            </div>
        </div>

        <div class="w-100 bg-primary py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text-center text-light light-300">
                            © Copyright 2024 UMKVest. All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->


    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Templatemo -->
    <script src="assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="assets/js/custom.js"></script>

</body>

@endsection