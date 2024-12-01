@extends('app.layouts.main')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade-up" data-aos-delay="100">
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/myprojects') }}">My Projects</a></li>
                        <li class="current">Admin giku</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Portfolio Details Section -->
        <section id="portfolio-details" class="portfolio-details section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <!-- Bootstrap Carousel -->
                        <div id="portfolioCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/img/portfolio/admin_giku1.png') }}" class="d-block w-100"
                                        alt="Image 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/portfolio/admin_giku2.png') }}" class="d-block w-100"
                                        alt="Image 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/portfolio/admin_giku3.png') }}" class="d-block w-100"
                                        alt="Image 3">
                                </div>
                            </div>
                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#portfolioCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#portfolioCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="portfolio-description" data-aos="fade-up" data-aos-delay="200">
                            <h2 class="about-title">Admin Giku</h2>
                            <p>
                                Proyek <strong class="highlight">Admin Giku</strong> adalah bagian dari ekosistem <strong
                                    class="highlight">Giku App</strong>, yang berfungsi sebagai platform manajemen untuk
                                dokter dan staf klinik. Dibangun menggunakan <strong class="highlight">Laravel</strong>,
                                aplikasi ini memungkinkan dokter untuk mengatur jadwal praktek mereka secara mandiri,
                                memantau antrian pasien, serta mengelola antrian pasien dengan lebih mudah.
                            </p>
                            <p>
                                Dengan integrasi <strong class="highlight">Firebase</strong>, Admin Giku membantu
                                meningkatkan efisiensi operasional klinik sekaligus mempermudah pengelolaan data pasien.
                                Semua data, termasuk antrian pasien dan jadwal dokter, disimpan secara real-time menggunakan
                                <strong class="highlight">Firebase Realtime Database</strong>.
                            </p>
                        </div>
                        <div class="portfolio-info" data-aos="fade-up" data-aos-delay="300">
                            <h3>Informasi Proyek</h3>
                            <ul>
                                <li><strong>Kategori</strong>: Web Application</li>
                                <li><strong>Repository Proyek</strong>: <a
                                        href="https://github.com/asepsj/admin_giku">https://github.com/asepsj/admin_giku</a>
                                </li>
                                <li>
                                    <strong>Teknologi yang Digunakan</strong>:
                                    <ul>
                                        <li>Laravel</li>
                                        <li>Firebase Realtime Database</li>
                                        <li>Firebase Authentication</li>
                                        <li>Firebase Storage</li>
                                        <li>HTML, CSS, JavaScript</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
