<header id="header" class="header d-flex align-items-center fixed-top bg-black">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="" loading="lazy">
            <h1 class="sitename">My Portfolio</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ url('/about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                </li>
                <li><a href="{{ url('/resume') }}" class="{{ request()->routeIs('resume') ? 'active' : '' }}">Resume</a>
                </li>
                <li><a href="{{ url('/myprojects') }}"
                        class="{{ request()->routeIs('myprojects') || request()->routeIs('myprojects.myportfolio') || request()->routeIs('myprojects.webdesa') || request()->routeIs('myprojects.admingiku') || request()->routeIs('myprojects.gikuapp') ? 'active' : '' }}">My Projects</a>
                </li>
                <li><a href="{{ url('/contact') }}"
                        class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
