@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <body>
    <!-- Start Banner Hero -->
    <section class="bg-light w-100">
        <div class="container">
            <div class="row d-flex align-items-center py-5">
                <div class="col-lg-6 text-start">
                    <h1 class="h2 py-5 text-primary typo-space-line">Tentang Kami</h1>
                    <p class="light-300">
                        <strong>UMKVest</strong> merupakan platform pendanaan inovatif yang dirancang untuk mendukung UMKM dalam mendapatkan akses dana. Kami menghubungkan UMKM dengan investor yang berpotensi menyediakan pendanaan,<br>
                        membantu UMKM tumbuh dan berkembang.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="./assets/img/banner-img-02.svg">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Hero -->


    <!-- Start Team Member -->
    <section class="container py-5">
    <div class="pt-5 pb-3 d-lg-flex align-items-center gx-5">
        <div class="col-lg-3">
            <h2 class="h2 py-5 typo-space-line">Tim Kami</h2>
            <p class="text-muted light-300">
                    Grup 46 UMKM
                </p>
        </div>

        <div class="col-lg-9">
            <!-- Baris atas dengan dua foto -->
            <div class="row mb-4">
                <div class="col-md-6 mb-4">
                    <div class="team-member text-center">
                    <img class="team-member-img img-fluid  rounded-circle" src="./assets/img/foto_annisa2.jpg" alt="Card image" style="width: 220px; height: 230px; object-fit: cover;object-fit: cover; object-position: center; border: 4px solid #85a3cc91; border-radius: 50%;">
                        <ul class="team-member-caption list-unstyled pt-4 text-muted light-300">
                            <li style="font-weight:bold; font-size:19px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:black;">Annisa Khoirala Ermy Pily</</li>
                            <li style= "color:black;">Data Scientist / AI Engineer</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="team-member text-center">
                        <img class="team-member-img img-fluid rounded-circle" src="./assets/img/foto_dewi2.jpg" alt="Card image" style="width: 220px; height: 230px; object-fit: cover;object-fit: cover; object-position: center; border: 4px solid #8fb6b191; border-radius: 50%;">
                        <ul class="team-member-caption list-unstyled pt-4 text-muted light-300">
                            <li style="font-weight:bold; font-size:19px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:black;">Dewi Sawita</li>
                            <li style= "color:black;">Back-end Developer</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Baris bawah dengan tiga foto -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="team-member text-center">
                        <img class="team-member-img img-fluid" src="./assets/img/foto_ardian2.jpg" alt="Card image" style="width: 220px; height: 240px; object-fit: cover;object-fit: cover; object-position: center; border: 4px solid #c8a6b040; border-radius: 50%;">
                        <ul class="team-member-caption list-unstyled pt-4 text-muted light-300">
                            <li style="font-weight:bold; font-size:19px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:black;">Ardian Setiawan</li>
                            <li style= "color:black;">Full-Stack Security Engineer</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="team-member text-center">
                        <img class="team-member-img img-fluid rounded-circle" src="./assets/img/foto_kiki2.jpg" alt="Card image" style="width: 220px; height: 230px; object-fit: cover;object-fit: cover; object-position: center; border: 4px solid #b5c8a670; border-radius: 50%;">
                        <ul class="team-member-caption list-unstyled pt-4 text-muted light-300">
                            <li style="font-weight:bold; font-size:19px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:black;">Kiki Maulana</li>
                            <li style= "color:black;">IT Support</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="team-member text-center">
                        <img class="team-member-img img-fluid rounded-circle" src="./assets/img/foto_faathir2.jpg" alt="Card image" style="width: 220px; height: 230px; object-fit: cover;object-fit: cover; object-position: center; border: 4px solid #2a777c40; border-radius: 50%;">
                        <ul class="team-member-caption list-unstyled pt-4 text-muted light-300">
                            <li style="font-weight:bold; font-size:19px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:black;">Muhammad Faathir Jabal Rahman</li>
                            <li style= "color:black;">Front-end Developer</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- End Team Member -->

    <!-- Start Our Partner -->
    <!--End Our Partner-->


    <!-- Start Choice -->
    <section class="why-us banner-bg bg-light">
        <div class="container my-4">
            <div class="row">
                <div class="banner-img col-lg-5">
                    <img src="./assets/img/work.svg" class="rounded img-fluid" alt="">
                </div>
                <div class="banner-content col-lg-7 align-self-end">
                    <h2 class="h2 pb-3">Filosofi Kami</h2>
                    <p class="text-muted pb-5 light-300">
                    Perpaduan UMKM dan Investor yang menjadi UMKVest yang sesuai dengan tujuan kami.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Choice -->

    <!-- End Aim -->

    <!-- Start Contact -->
    <!-- End Contact -->


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

@endsection
