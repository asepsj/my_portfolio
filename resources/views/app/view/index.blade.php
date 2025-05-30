@extends('app.layouts.main')

@section('content')
    <main class="main">

        <section id="hero" class="hero section">
            <div class="container" data-aos="zoom-out" data-aos-delay="100">
                <div class="hero-content">

                    <div class="profile-image mx-5">
                        <img src="{{ asset('assets/img/foto/home-foto.webp') }}" alt="Profile Picture" loading="lazy">
                    </div>

                    <div class="hero-text">
                        <h2>Asep</h2>
                        <h2>Saefuddin Zuhri</h2>
                        <p>I'm <span class="typed" data-typed-items="Fresh Graduate, Open to Work, Actively Looking for Work, Junior Developer Seeking Opportunities"></span></p>
                        <a href="{{ url('/about') }}" class="btn-hero">Learn More About Me</a>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
