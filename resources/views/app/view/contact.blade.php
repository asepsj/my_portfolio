@extends('app.layouts.main')

@section('content')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title" data-aos="fade-up" data-aos-delay="100">
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">Contact</li>
                    </ol>
                </div>
            </nav>
        </div>

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">

                    <!-- Info Section -->
                    <div class="col-lg-4">
                        <div class="info-item d-flex align-items-start" data-aos="fade-up" data-aos-delay="200">
                            <i class="icon bi bi-geo-alt"></i>
                            <div>
                                <h3>Address</h3>
                                <p>Indramayu, Jawa Barat</p>
                            </div>
                        </div>

                        <!-- WhatsApp Link -->
                        <div class="info-item d-flex align-items-start" data-aos="fade-up" data-aos-delay="300">
                            <i class="icon bi bi-telephone"></i>
                            <div>
                                <h3>Phone</h3>
                                <a href="https://api.whatsapp.com/send?phone=6289636505062" target="_blank">
                                    089636505062
                                </a>
                            </div>
                        </div>

                        <!-- Email Link -->
                        <div class="info-item d-flex align-items-start" data-aos="fade-up" data-aos-delay="400">
                            <i class="icon bi bi-envelope"></i>
                            <div>
                                <h3>Email</h3>
                                <a href="mailto:asepsj07@gmail.com" target="_blank">asepsj07@gmail.com</a>
                            </div>
                        </div>

                        <div class="info-item d-flex align-items-start" data-aos="fade-up" data-aos-delay="500">
                            <i class="icon bi bi-share"></i>
                            <div>
                                <h3>Social Profiles</h3>
                                <div class="social-links">
                                    <!-- LinkedIn -->
                                    <a href="https://www.linkedin.com/in/asep-saefuddin-zuhri-a9b6492b0/" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="bi bi-linkedin"></i>
                                    </a>
                                    <!-- GitHub -->
                                    <a href="https://github.com/asepsj" target="_blank" rel="noopener noreferrer">
                                        <i class="bi bi-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="col-lg-8">
                        <form id="contactForm" class="php-email-form" onsubmit="sendEmail(event)" data-aos="fade-up"
                            data-aos-delay="500">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" id="name" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" id="email" class="form-control" placeholder="Your Email"
                                        required="">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" id="subject" class="form-control" placeholder="Subject"
                                        required="">
                                </div>
                                <div class="col-md-12">
                                    <textarea id="message" class="form-control" rows="6" placeholder="Message" required=""></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
