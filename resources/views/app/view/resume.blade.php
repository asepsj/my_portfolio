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
                            <p><em>Fresh graduate Teknik Informatika dengan pengalaman mengembangkan aplikasi menggunakan
                                    Flutter, Laravel. Aktif berorganisasi dengan kemampuan komunikasi, kerja
                                    tim, dan kepemimpinan yang baik. Berkomitmen untuk menciptakan solusi teknologi yang
                                    inovatif dan berfokus pada pengalaman pengguna.</em></p>
                            <ul>
                                <li>Indramayu, Jawa Barat</li>
                                <li>089636505062</li>
                                <li>asepsj07@gmail.com</li>
                            </ul>
                        </div><!-- End Resume Item -->

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Diploma III Teknik Informatika</h4>
                            <h5>2021 - 2024</h5>
                            <p><em>Politeknik Negeri Indramayu, Indramayu</em></p>
                            <p>IPK: 3.44. Selama perkuliahan, aktif dalam organisasi yang mengasah kemampuan komunikasi,
                                kerja tim, dan kepemimpinan. Mengembangkan beberapa proyek berbasis mobile menggunakan
                                Flutter, Laravel, dan Firebase.</p>
                        </div><!-- End Resume Item -->
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item pb-0">
                            <h4>Intern Programmer</h4>
                            <h5>6 Bulan (Januari 2023 - Juni 2023)</h5>
                            <p><em>Authentic Guard, Indramayu</em></p>
                            <ul>
                                <li>Bertanggung jawab mengembangkan dan memelihara aplikasi mobile menggunakan Flutter
                                    sesuai kebutuhan perusahaan.</li>
                                <li>Berkoordinasi dengan tim untuk menerapkan desain UI/UX yang responsif dan ramah
                                    pengguna.</li>
                                <li>Melakukan integrasi Firebase, termasuk Realtime Database dan Authentication untuk
                                    pengelolaan data secara real-time.</li>
                                <li>Berperan dalam pengujian dan debugging aplikasi untuk memastikan kualitas dan performa
                                    optimal.</li>
                            </ul>
                        </div><!-- End Resume Item -->

                        <h3 class="resume-title">Organizational Experience</h3>
                        <div class="resume-item">
                            <h4>Humas Internal</h4>
                            <h5>2022 - 2023</h5>
                            <p><em>Forum Mahasiswa Bidikmisi/KIP-Kuliah, Politeknik Negeri Indramayu</em></p>
                            <ul>
                                <li>Menjalin komunikasi efektif dengan mahasiswa penerima beasiswa Bidikmisi/KIP-Kuliah.
                                </li>
                                <li>Mengelola penyebaran informasi internal terkait program beasiswa dan kegiatan kampus.
                                </li>
                                <li>Berperan aktif dalam penyelenggaraan acara dan kegiatan sosial bagi mahasiswa penerima
                                    beasiswa.</li>
                            </ul>
                        </div><!-- End Resume Item -->

                        <div class="resume-item">
                            <h4>Humas Eksternal</h4>
                            <h5>2022 - 2023</h5>
                            <p><em>Himpunan Mahasiswa Teknik Informatika, Politeknik Negeri Indramayu</em></p>
                            <ul>
                                <li>Berperan sebagai penghubung antara organisasi kampus dan pihak eksternal.</li>
                                <li>Menjalin kerjasama dengan perusahaan dan instansi terkait untuk mendukung kegiatan
                                    Himpunan Mahasiswa.</li>
                            </ul>
                        </div><!-- End Resume Item -->
                    </div>
                </div>

            </div>

        </section><!-- /Resume Section -->

    </main>
@endsection
