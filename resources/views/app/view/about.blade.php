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
        </div><!-- End Page Title -->

        <section id="about" class="about section" data-aos="fade-up" data-aos-delay="200">
            <!-- About Section -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="img-container">
                            <img src="{{ asset('assets/img/foto/foto2.jpg') }}" class="img-fluid" alt="Profile Picture">
                        </div>
                    </div>
                    <div class="col-lg-8 content about-content">
                        <h2 class="about-title">About Me</h2>
                        <p class="fst-italic">
                            Saya adalah lulusan baru dari <span class="highlight">Politeknik Negeri Indramayu</span>,
                            jurusan <span class="highlight">Teknik Informatika</span>, dengan
                            IPK <span class="highlight">3,44</span>. Selama perkuliahan, saya aktif dalam organisasi
                            yang
                            telah mengasah kemampuan
                            <span class="highlight">komunikasi</span>, <span class="highlight">kerja tim</span>, dan
                            <span class="highlight">kepemimpinan</span>.
                            Berpengalaman dalam pengembangan aplikasi mobile dan web menggunakan framework <span
                                class="highlight">Flutter</span> dan <span class="highlight">Laravel</span>,
                            saya mampu membangun aplikasi yang fungsional dan responsif. Saya dikenal sebagai individu
                            yang
                            mampu <span class="highlight">belajar dengan cepat</span> dan
                            beradaptasi pada situasi baru, baik bekerja dalam tim maupun secara mandiri untuk
                            menyelesaikan
                            proyek tepat waktu.
                            Dengan semangat untuk terus <span class="highlight">belajar teknologi baru</span>, saya siap
                            berkontribusi dalam tim untuk mencapai tujuan bersama dan memberikan
                            <span class="highlight">solusi inovatif</span> yang dapat memenuhi kebutuhan pengguna.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /About Section -->

            <!-- Skills Section -->
            <nav id="skills" class="skills section">
                <!-- Section Title -->
                <div class="container section-title">
                    <h2>Skills</h2>
                    <div><span>My</span> <span class="description-title">Skills</span></div>
                </div>
                <!-- End Section Title -->
                <div class="container" data-aos="fade-up">
                    <div class="row skills-content skills-animation">
                        <div class="col-lg-6">
                            <div class="progress">
                                <span class="skill"><span>Laravel</span> <i class="val">85%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>Flutter</span> <i class="val">80%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>PHP</span> <i class="val">85%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>Firebase</span> <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>SQL</span> <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!-- End Skills Item -->

                        </div>

                        <div class="col-lg-6">

                            <div class="progress">
                                <span class="skill"><span>HTML</span> <i class="val">95%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>Bootstrap</span> <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>Figma</span> <i class="val">80%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>Canva</span> <i class="val">80%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                        </div>

                    </div>

                </div>

            </nav><!-- /Skills Section -->
        </section>

    </main>
@endsection
