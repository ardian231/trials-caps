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
                        <strong>UMKVEST</strong> merupakan organisasi yang bergerak di bidang keuangan dengan bertujuan untuk membantu para UMKM agar mendapatkan pendanaan dari para Investor guna memajukan bangsa dan negara.
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
                    Kami termasuk perusahaan start-up dengan tim yang terdiri dari 5 orang pekerja keras dengan hati yang lugas 
                </p>
            </div>

            <div class="col-lg-9 row">
                <div class="team-member col-md-4">
                    <img class="team-member-img img-fluid rounded-circle p-4" src="./assets/img/team-01.jpg" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li>Anissa Khoirala Ermy Pily</li>
                        <li>AI Development</li>
                    </ul>
                </div>
                <div class="team-member col-md-4">
                    <img class="team-member-img img-fluid rounded-circle p-4" src="./assets/img/team-02.jpg" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li>Ardian Setiawan</li>
                        <li>Penetration Tester</li>
                    </ul>
                </div>
                <div class="team-member col-md-4">
                    <img class="team-member-img img-fluid rounded-circle p-4" src="./assets/img/team-03.jpg" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li>Dewi Sawita</li>
                        <li>Front-end Developer</li>
                    </ul>
                </div>
                <div class="team-member col-md-4">
                    <img class="team-member-img img-fluid rounded-circle p-4" src="./assets/img/team-03.jpg" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li>Kiki Maulana</li>
                        <li>IT Support</li>
                    </ul>
                </div>
                <div class="team-member col-md-4">
                    <img class="team-member-img img-fluid rounded-circle p-4" src="./assets/img/team-03.jpg" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li>Muhammad Faathir Jabal Rahman</li>
                        <li>Front-end Developer</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- End Team Member -->

    <!-- Start Our Partner -->
    <!--End Our Partner-->

    <!-- Start Progress -->
    <section class="bg-white py-5">
        <div class="container my-4">

            <h1 class="creative-heading h2 pb-3">Filosofi Kami</h1>

            <div class="creative-content row py-3">
                <div class="col-md-5">
                    <p class="text-muted col-lg-8 light-300">Perpaduan UMKM dan Investor yang menjadi UMKVEST yang sesuai dengan tujuan kami
                    </p>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Progress -->

    <!-- Start Choice -->
    <section class="why-us banner-bg bg-light">
        <div class="container my-4">
            <div class="row">
                <div class="banner-img col-lg-5">
                    <img src="./assets/img/work.svg" class="rounded img-fluid" alt="">
                </div>
                <div class="banner-content col-lg-7 align-self-end">
                    <h2 class="h2 pb-3">Mengapa harus memilih kami?</h2>
                    <p class="text-muted pb-5 light-300">
                    Kami berfokus kepada UMKM dan Investor yang bersungguh - sungguh memakai jasa kami dengan mengedepankan keamanan dan kenyamanan. Kami yakin para UMKM dan Investor merasakan kepuasan dengan memakai jasa kami.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Choice -->

    <!-- Start Aim -->
    <section class="banner-bg bg-white py-5">
        <div class="container my-4">
            <div class="row text-center">

                <div class="objective col-lg-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                        <i class="display-4 bx bxs-bulb text-light"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300"><strong>Visi Kami</strong></h2>
                    <p class="light-300">
                        Membantu memajukan kesejahteraan negara dengan mengandalkan UMKM dan Investor
                    </p>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                        <i class='display-4 bx bx-revision text-light'></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300"><strong>Misi Kami</strong></h2>
                    <p class="light-300">
                        Mencapai tujuan bertransaksi hingga mendapatkan keuntungan kedua pihak antara UMKM dengan Investor
                    </p>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                        <i class="display-4 bx bxs-select-multiple text-light"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300"><strong>Tujuan Kami</strong></h2>
                    <p class="light-300">
                        Memudahkahkan proses pendanaan antara UMKM dengan Investor
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- End Aim -->

    <!-- Start Contact -->
    <section class="banner-bg bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto my-4 p-3">
                    <form action="#" method="get"><h1 class="h2 text-center">Masukkan email anda untuk info terbaru</h1>
                    <div class="input-group py-3">
                    
                        <input name="email" type="text" class="form-control form-control-lg rounded-pill rounded-end" id="email" placeholder="Your Email" aria-label="Your Email">
                        <button class="btn btn-secondary text-white btn-lg rounded-pill rounded-start px-lg-4" type="submit">Subsribe</button>
                    </div>
                    <p class="text-center light-300">Kami akan mengirimkan info terbaru seperti berita hingga promo terbaru nantinya.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->


    <!-- Start Footer -->
    <footer class="bg-secondary pt-4">
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-3 col-12 align-left">
                    <a class="navbar-brand" href="index.html">
                        <i class='bx bx-buildings bx-sm text-light'></i>
                        <span class="text-light h5">UMK</span> <span class="text-light h5 semi-bold-600">VEST</span>
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
                            © Copyright 2024 UMKVEST. All Rights Reserved.
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
