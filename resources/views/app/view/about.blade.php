@extends('app.layouts.main')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade-up" data-aos-delay="100">
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">About</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <section id="about" class="about section" data-aos="fade-up" data-aos-delay="200">
            <!-- About Section -->
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="img-container">
                            <img src="{{ asset('assets/img/foto/about-foto.webp') }}" class="img-fluid"
                                alt="Profile Picture" loading="lazy">
                        </div>
                    </div>
                    <div class="col-lg-8 content about-content">
                        <h2 class="about-title">About Me</h2>
                        <p class="fst-italic">
                            I am a recent graduate from <span class="highlight">Politeknik Negeri Indramayu</span>, majoring
                            in <span class="highlight">Informatics Engineering</span>, with a GPA of <span
                                class="highlight">3.44</span>. I have experience in developing applications using the <span
                                class="highlight">Flutter</span> and <span class="highlight">Laravel</span> frameworks, as
                            well as utilizing <span class="highlight">Firebase</span> for features such as Realtime
                            Database, Storage, and Authentication. In addition, I have also used <span
                                class="highlight">MySQL</span> as the database for web development with Laravel.
                        </p>
                        <p class="fst-italic">
                            I have been active in student organizations, which has helped me develop my <span
                                class="highlight">communication</span>, <span class="highlight">teamwork</span>, and <span
                                class="highlight">leadership</span> skills. I am a fast learner, easily adaptable to new
                            environments, and capable of working both independently and in a team to complete tasks on time.
                        </p>
                        <p class="fst-italic">
                            With a strong enthusiasm for continuous learning, I am eager to contribute to a team, achieve
                            shared goals, and deliver <span class="highlight">innovative solutions</span> that meet the
                            needs of users and the company.
                        </p>
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
                                    <span class="skill"><span>Laravel</span> <i class="val">88%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="88" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- End Skills Item -->

                                <div class="progress">
                                    <span class="skill"><span>Flutter</span> <i class="val">88%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="88" aria-valuemin="0"
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
                                    <span class="skill"><span>Firebase</span> <i class="val">78%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- End Skills Item -->

                                <div class="progress">
                                    <span class="skill"><span>SQL</span> <i class="val">78%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- End Skills Item -->

                            </div>

                            <div class="col-lg-6">
                                <div class="progress">
                                    <span class="skill"><span>HTML</span> <i class="val">98%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="98"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!-- End Skills Item -->

                                <div class="progress">
                                    <span class="skill"><span>CSS</span> <i class="val">98%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="98"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!-- End Skills Item -->

                                <div class="progress">
                                    <span class="skill"><span>Bootstrap</span> <i class="val">95%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="95"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!-- End Skills Item -->

                                <div class="progress">
                                    <span class="skill"><span>Figma</span> <i class="val">85%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!-- End Skills Item -->

                                <div class="progress">
                                    <span class="skill"><span>Canva</span> <i class="val">85%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!-- End Skills Item -->

                            </div>

                        </div>

                    </div>

                </nav><!-- /Skills Section -->
        </section>

    </main>
@endsection
