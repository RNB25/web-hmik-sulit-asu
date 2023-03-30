<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="navbar-brand float-left" href="#">
        <img src="{{ asset('img/logo_universitas_pertamina.png') }}" class="images-logo img-fluid" alt="UP logo">
    </div>
    <div class="navbar-brand float-left" href="#">
        <img src="{{ asset('img/logo_hmik.png') }}" alt="HMIK logo" class="images-logo">
    </div>
    <div class="navbar-brand float-left" href="#">
        <img src="{{ asset('img/text_hmik.png') }}" alt="HMIK text logo" class="images-logo">
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link {{ ($active === "home") ? 'active' : '' }} fw-bold text-dark" href="/">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "about") ? 'active' : '' }} fw-bold text-dark"
                    href="/about">Lomba</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "posts") ? 'active' : '' }} fw-bold text-dark"
                    href="/posts">Seminar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "categories") ? 'active' : '' }} fw-bold text-dark"
                    href="/categories">Acara</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "curhat") ? 'active' : '' }} fw-bold text-dark"
                    href="/curhat">Curhat</a>
            </li>
        </ul>
    </div>
</nav>
<!-- 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo_universitas_pertamina.png') }}" alt="UP logo">
            <img src="{{ asset('img/logo_hmik.png') }}" alt="HMIK logo">
            <img src="{{ asset('img/text_hmik.png') }}" alt="HMIK text logo">
        </a>

        <div class="nav-menu float-right">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color:black;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === "home") ? 'active' : '' }} fw-bold text-dark"
                            href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === "about") ? 'active' : '' }} fw-bold text-dark"
                            href="/about">Lomba</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === "posts") ? 'active' : '' }} fw-bold text-dark"
                            href="/posts">Seminar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === "categories") ? 'active' : '' }} fw-bold text-dark"
                            href="/categories">Acara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === "curhat") ? 'active' : '' }} fw-bold text-dark"
                            href="/curhat">Curhat</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color:black;" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu custom-dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><i
                                        class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>

                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav> -->
