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
                        <li class="current">Web desa</li>
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
                                    <img src="{{ asset('storage/img/webdesa1.png') }}" class="d-block w-100" alt="Image 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/img/webdesa2.png') }}" class="d-block w-100" alt="Image 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/img/webdesa3.png') }}" class="d-block w-100" alt="Image 3">
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
                            <h2 class="about-title">Web Desa</h2>
                            <p>
                                Pada proyek ini, saya mengembangkan sebuah <strong class="highlight">website desa</strong>
                                sederhana menggunakan <strong class="highlight">Laravel</strong> sebagai framework utama
                                untuk backend dan rontend. Website ini dirancang untuk membantu pemerintah desa menyebarkan
                                <strong class="highlight">informasi</strong>, seperti <strong class="highlight">berita
                                    desa</strong>, <strong class="highlight">pengumuman</strong>, serta menyediakan fitur
                                <strong class="highlight">pengaduan masyarakat</strong> yang memungkinkan warga menyampaikan
                                keluhan atau masukan secara mudah dan efisien.
                            </p>
                        </div>
                        <div class="portfolio-info" data-aos="fade-up" data-aos-delay="300">
                            <h3>Project Information</h3>
                            <ul>
                                <li><strong>Category</strong>: Web Application</li>
                                <li><strong>Project Repository</strong>:
                                    <a href="https://github.com/asepsj/webdesa">https://github.com/asepsj/webdesa</a>
                                </li>
                                <li>
                                    <strong>Technologies Used</strong>:
                                    <ul>
                                        <li>Laravel</li>
                                        <li>HTML, CSS, dan JavaScript</li>
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
