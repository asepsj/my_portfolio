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
                                    <img src="{{ asset('assets/img/portfolio/my_portofolio1.webp') }}" class="d-block w-100"
                                        alt="Image 1" loading="lazy">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/portfolio/my_portofolio2.webp') }}" class="d-block w-100"
                                        alt="Image 2" loading="lazy">
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
                                The <strong class="highlight">My Portfolio</strong> project is a web platform I designed to
                                showcase my portfolio. This website includes detailed descriptions of each project I have
                                worked on, supported by a visual gallery to enhance the presentation of my work. Built using
                                <strong class="highlight">Laravel</strong>, this project aims to represent myself and my
                                expertise in web development. With a responsive interface, the website is designed to
                                provide an optimal viewing experience across various devices.
                            </p>
                        </div>
                        <div class="portfolio-info" data-aos="fade-up" data-aos-delay="300">
                            <h3>Project Information</h3>
                            <ul>
                                <li><strong>Category</strong>: Web Application</li>
                                <li><strong>Project Repository</strong>: <a
                                        href="https://github.com/asepsj/my_portfolio">https://github.com/asepsj/my_portfolio</a>
                                </li>
                                <li>
                                    <strong>Technologies Used</strong>:
                                    <ul>
                                        <li>Laravel 12</li>
                                        <li>HTML, CSS, and JavaScript</li>
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
