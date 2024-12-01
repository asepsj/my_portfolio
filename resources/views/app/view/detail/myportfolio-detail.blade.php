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
                        <li class="current">My portofolio</li>
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
                                    <img src="{{ asset('assets/img/portfolio/my_portofolio1.png') }}" class="d-block w-100"
                                        alt="Image 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/portfolio/my_portofolio2.png') }}" class="d-block w-100"
                                        alt="Image 2">
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
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="portfolio-description" data-aos="fade-up" data-aos-delay="200">
                            <h2 class="about-title">My Portfolio</h2>
                            <p>
                                Proyek <strong class="highlight">My Portfolio</strong> adalah sebuah platform web yang saya
                                rancang untuk menampilkan portofolio saya. Website ini mencakup deskripsi mendalam untuk
                                setiap proyek yang saya kerjakan, dilengkapi dengan galeri visual yang mendukung presentasi
                                karya saya. Dibangun menggunakan <strong class="highlight">Laravel</strong>, proyek ini
                                bertujuan untuk merepresentasikan diri saya dan keahlian saya dalam pengembangan web. Dengan
                                antarmuka yang responsif, website ini dirancang agar dapat memberikan pengalaman tampilan
                                yang optimal di berbagai perangkat.
                            </p>
                        </div>
                        <div class="portfolio-info" data-aos="fade-up" data-aos-delay="300">
                            <h3>Informasi Proyek</h3>
                            <ul>
                                <li><strong>Kategori</strong>: Web Application</li>
                                <li><strong>Repository Proyek</strong>: <a
                                        href="https://github.com/asepsj/my_portfolio">https://github.com/asepsj/my_portfolio</a>
                                </li>
                                <li>
                                    <strong>Teknologi yang Digunakan</strong>:
                                    <ul>
                                        <li>Laravel</li>
                                        <li>HTML, CSS, dan JavaScript</li>
                                        <li>Bootstrap 5</li>
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
