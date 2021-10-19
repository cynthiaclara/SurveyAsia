<nav class="sb-topnav navbar navbar-expand navbar-light bg-light shadow-sm">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="/"><img src="/assets/img/surveyasia.png" alt="Surveyasia" width="150"></a>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto me-3 me-lg-4">
        @auth
        <li>
            <img src="/assets/img/prof_pic.png" alt="Profile Picture" class="img-fluid" width="36">
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/profile"><i class="fas fa-user fa-fw"></i> Profile</a></li>
                <li><a class="dropdown-item" href="/respondent/dashboard"><i class="fas fa-user-friends fa-fw"></i> Jadi
                        Responden</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt fa-fw"></i>
                            Keluar</a></button>
                    </form>
                </li>
            </ul>
        </li>
        @endauth
    </ul>
</nav>