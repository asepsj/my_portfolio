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
                        <li class="current">Giku app</li>
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
                                    <img src="{{ asset('assets/img/portfolio/giku1.webp') }}" class="d-block w-100"
                                        alt="Image 1" loading="lazy">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/portfolio/giku2.webp') }}" class="d-block w-100"
                                        alt="Image 2" loading="lazy">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/portfolio/giku3.webp') }}" class="d-block w-100"
                                        alt="Image 3" loading="lazy">
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
                            <h2 class="about-title">Giku App</h2>
                            <p>
                                I developed the <strong class="highlight">Giku App</strong> using <strong
                                    class="highlight">Flutter</strong> as the frontend framework and <strong
                                    class="highlight">Firebase</strong> as the backend. This application is designed for
                                queue management in dental clinics, allowing patients to register online, view doctors'
                                schedules, and receive notifications about their queue status.
                            </p>
                            <p>
                                With the integration of <strong class="highlight">Firebase Authentication</strong>, <strong
                                    class="highlight">Realtime Database</strong>, and <strong class="highlight">Push
                                    Notifications</strong>, the app ensures data is always synchronized and up-to-date.
                            </p>
                        </div>

                        <div class="portfolio-info" data-aos="fade-up" data-aos-delay="300">
                            <h3>Project Information</h3>
                            <ul>
                                <li><strong>Category</strong>: Mobile Application</li>
                                <li><strong>Project Repository</strong>: <a
                                        href="https://github.com/asepsj/GikuProject">https://github.com/asepsj/GikuProject</a>
                                </li>
                                <li>
                                    <strong>Technologies Used</strong>:
                                    <ul>
                                        <li>Flutter</li>
                                        <li>Firebase Authentication</li>
                                        <li>Firebase Realtime Database</li>
                                        <li>Firebase Cloud Messaging</li>
                                        <li>Firebase Storage</li>
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
