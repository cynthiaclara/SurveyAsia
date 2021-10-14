<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand text-default" href="/"><img src="/assets/img/surveyasia.png" alt="Surveyasia"
                width="150"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Harga</a>
                </li>
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->username }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/"><i class="fas fa-user fa-fw"></i> Beranda</a></li>
                        <li><a class="dropdown-item" href="/researcher/dashboard"><i
                                    class="fas fa-tachometer-alt fa-fw"></i> Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt fa-fw"></i>
                                    Keluar</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a class="btn btn-outline-default mx-sm-3" href="/sign-in" role="button">Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-default text-white" href="/pilih" role="button">Bergabung</a>
                </li>
                @endauth
                <li class="nav-item ms-3 me-2">
                    <div class="vl"></div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        ID
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">ID</a></li>
                        <li><a class="dropdown-item" href="#">EN</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>