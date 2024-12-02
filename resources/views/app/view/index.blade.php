@extends('app.layouts.main')

@section('content')
    <main class="main">

        <section id="hero" class="hero section bg-black">
            <div class="container" data-aos="zoom-out" data-aos-delay="100">
                <div class="hero-content">

                    <div class="profile-image mx-5">
                        <img src="{{ asset('storage/img/foto/foto1.png') }}" alt="Profile Picture" loading="lazy">
                    </div>

                    <div class="hero-text">
                        <h2>Asep</h2>
                        <h2>Saefuddin Zuhri</h2>
                        <p>I'm <span class="typed"
                                data-typed-items="Web Developer, Mobile Developer, Full Stack Developer, Programmer">Web Developer</span><span
                                class="typed-cursor typed-cursor--blink"></span></p>
                        <a href="{{ url('/about') }}" class="btn-hero">Learn More About Me</a>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
