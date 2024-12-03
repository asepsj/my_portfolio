@extends('app.layouts.main')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade-up" data-aos-delay="100">
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">Resume</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Resume Section -->
        <section id="resume" class="resume section">

            <div class="container">

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="resume-title">Summary</h3>

                        <div class="resume-item pb-0">
                            <h4>Asep Saefuddin Zuhri</h4>
                            <p>A fresh graduate in Information Technology with experience in developing applications
                                using Flutter and Laravel. Actively participated in organizations, honing skills in
                                communication, teamwork, and leadership. Committed to creating innovative technology
                                solutions focused
                                on user experience.</p>
                            <ul>
                                <li>Indramayu, West Java</li>
                                <li>089636505062</li>
                                <li>asepsj07@gmail.com</li>
                            </ul>
                        </div><!-- End Resume Item -->

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Diploma III in Information Technology</h4>
                            <h5>2021 - 2024</h5>
                            <p><em>Politeknik Negeri Indramayu, Indramayu</em></p>
                            <p>GPA: 3.44. Actively participated in organizations, honing skills in communication, teamwork,
                                and leadership. Developed several mobile-based projects using Flutter, Laravel, and
                                Firebase.</p>
                        </div><!-- End Resume Item -->
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item pb-0">
                            <h4>Intern Programmer</h4>
                            <h5>6 Months (Jun 2023 - Nov 2023)</h5>
                            <p><em>Authentic Guard Technology, Bandung</em></p>
                            <ul>
                                <li>Responsible for developing and maintaining mobile applications using Flutter based on
                                    company needs.</li>
                                <li>Collaborated with the team to implement responsive and user-friendly UI/UX designs.</li>
                                <li>Integrated Firebase, including Realtime Database and Authentication, for real-time data
                                    management.</li>
                                <li>Participated in application testing and debugging to ensure optimal quality and
                                    performance.</li>
                            </ul>
                        </div><!-- End Resume Item -->

                        <h3 class="resume-title">Organizational Experience</h3>
                        <div class="resume-item">
                            <h4>Internal Public Relations</h4>
                            <h5>2022 - 2023</h5>
                            <p><em>Forum Mahasiswa Bidikmisi/KIP-Kuliah, Politeknik Negeri Indramayu</em></p>
                            <ul>
                                <li>Established effective communication with Bidikmisi/KIP-Kuliah scholarship recipients.
                                </li>
                                <li>Managed the dissemination of internal information regarding scholarship programs and
                                    campus activities.</li>
                                <li>Actively participated in organizing events and social activities for scholarship
                                    recipients.</li>
                            </ul>
                        </div><!-- End Resume Item -->

                        <div class="resume-item">
                            <h4>External Public Relations</h4>
                            <h5>2022 - 2023</h5>
                            <p><em>Himpunan Mahasiswa Teknik Informatika, Politeknik Negeri Indramayu</em></p>
                            <ul>
                                <li>Acted as a liaison between campus organizations and external parties.</li>
                                <li>Established collaborations with companies and institutions to support Student
                                    Association activities.</li>
                            </ul>
                        </div><!-- End Resume Item -->
                    </div>
                </div>

            </div>

        </section><!-- /Resume Section -->

    </main>
@endsection
