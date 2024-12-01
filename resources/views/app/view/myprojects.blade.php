@extends('app.layouts.main')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade-up" data-aos-delay="100">
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">My Project</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('assets/img/portfolio/my_portofolio1.png') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>My Portfolio</h4>
                                    <a href="{{ url('/myprojects/myportfolio') }}" title="More Details"
                                        class="details-link"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('assets/img/portfolio/giku1.png') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Giku App</h4>
                                    <a href="{{ url('/myprojects/gikuapp') }}" title="More Details" class="details-link"><i
                                            class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('assets/img/portfolio/admin_giku1.png') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Admin Giku</h4>
                                    <a href="{{ url('/myprojects/admingiku') }}" title="More Details"
                                        class="details-link"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('assets/img/portfolio/webdesa1.png') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web Desa</h4>
                                    <a href="{{ url('/myprojects/webdesa') }}" title="More Details" class="details-link"><i
                                            class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

    </main>
@endsection
