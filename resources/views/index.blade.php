@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <body>
  <!-- Start Banner Hero -->
    <div class="banner-wrapper bg-light">
        <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">

            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                    Membantu <strong>UMKM</strong> Untuk 
                                  <br>dapat Dana!
                              </h1>
                                <p class="banner-body text-muted py-3 mx-0 px-0">
                                    UMKVEST adalah sebuah platform pendanaan yang berguna untuk membantu para UMKM mencairkan dana demi memajukan bangsa dan negara
                              </p>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="{{ route('register') }}" role="button">Join disini!</a>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                    <strong>Bagaimana cara kerjanya?</strong>
                                </h1>
                                <p class="banner-body text-muted py-3">
                                Untuk kamu pengguna <strong>UMKM</strong>, kamu bisa klik <strong>UMKM</strong> di atas untuk mengajukan proposal. Kamu wajib <strong>Login atau Register</strong> terlebih dahulu ya! Lalu ikuti saja tata cara petunjuknya yang tersedia!
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                    <strong>Anda masih bingung?</strong> 
                                </h1>
                                <p class="banner-body text-muted py-3">
                                Silakan klik tombol dibawah ini!
                                </p>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="contact" role="button">Klik Disini!</a>
                            </div>
                        </div>

                    </div>
                </div>
                <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <i class='bx bx-chevron-left'></i>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <i class='bx bx-chevron-right'></i>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
            <!-- End slider -->

        </div>
    </div>
    <!-- End Banner Hero -->



    <!-- Start Service -->
    <section class="service-wrapper py-3">
        <div class="container-fluid pb-3">
            <div class="row">
                <h2 class="h2 text-center col-12 py-5 semi-bold-600">Layanan kami</h2>
                <div class="service-header col-2 col-lg-3 text-end light-300">
                    <i class='bx bx-gift h3 mt-1'></i>
                </div>
                <div class="service-heading col-10 col-lg-9 text-start float-end light-300">
                    <h2 class="h3 pb-4 typo-space-line">Memudahkan UMKM</h2>
                </div>
            </div>
            <p class="service-footer col-10 offset-2 col-lg-9 offset-lg-3 text-start pb-3 text-muted px-2">
                Dengan layanan ini, kami melayani dan memudahkahkan para UMKM untuk mendapatkan Investor yang layak dan begitu juga dengan Investor. Kami selalu mengedepankan Keamanan dan Kenyamanan dalam berproses.
            </p>
        </div>

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

@endsection
