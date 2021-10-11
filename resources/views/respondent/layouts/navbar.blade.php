<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand link-default" href="/"><img src="/assets/img/surveyasia.png" alt="Surveyasia"
                width="150"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link link-default" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-default" href="#">Riwayat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-default me-3" href="/news">News</a>
                </li>
                @auth
                <li>
                    <img src="/assets/img/prof_pic.png" alt="Profile Picture" class="img-fluid" width="36">
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->username }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/profile"><i class="fas fa-user fa-fw"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="/researcher/dashboard"><i
                                    class="fas fa-user-friends fa-fw"></i> Jadi Researcher</a></li>
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
                @endauth
            </ul>
        </div>
    </div>
</nav>