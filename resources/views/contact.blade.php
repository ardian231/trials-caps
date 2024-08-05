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
                    Tim kami tersedia untuk konsultasi melalui telepon setiap hari dari jam 09.00 - 17.00 WIB. Untuk konsultasi melalui email, tim kami siap melayani Anda 24 jam.
                    </p>
                </div>
                <div class="contact-img col-lg-5 align-items-end col-md-4">
                    <img src="./assets/img/banner-img-01.svg">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Hero -->
<!-- Start Aim -->
<section class="banner-bg bg-white py-5 text-center">
<div class="container my-4">
    <div class="row">
        <div class="objective col-lg-4 mx-auto">
        <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
            <i class="display-4 bx bxs-envelope text-light"></i>
        </div>
        <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300"><strong>Email</strong></h2>
        <p class="light-300">
            umkvest@gmail.com
        </p>
        </div>
        <div class="objective col-lg-4 mx-auto">
        <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
            <i class="display-4 bx bxl-whatsapp text-light"></i>
        </div>
        <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300"><strong>Nomor Telepon</strong></h2>
        <p class="light-300">
            (+62) 8132467895
        </p>
        </div>
    </div>
    </div>
</section>
<!-- End Aim -->
    <!-- Start Footer -->
    <footer class="bg-secondary pt-4">
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-3 col-12 align-left">
                    <a class="navbar-brand" href="index.html">
                        <i class='bx bx-buildings bx-sm text-light'></i>
                        <span class="text-light h5">UMK<span class="text-light h5 semi-bold-600">Vest</span></span> 
                    </a>
                    <p class="text-light my-lg-4 my-2">
                    Jembatan Inovatif <br>Antara UMKM dan Investor
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