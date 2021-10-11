<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- My CSS --}}
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/style.css">

    {{-- Favicon --}}
    <link rel='shortcut icon' type='image/x-icon' href='/favicon-surveyasia-32.png' />

    {{-- Font Awesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>

    <title>Researcher | Surveyasia.id</title>
</head>

<body>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light shadow" id="sidenavAccordion">
                <div class="sb-sidenav-menu py-5">
                    <div class="nav">
                        <a class="nav-link" href="/researcher/dashboard">
                            <div class="sb-nav-link-icon"><i class="fas fa-home fa-fw"></i></div>
                            Beranda
                        </a>
                        <a class="nav-link" href="/researcher/pricing">
                            <div class="sb-nav-link-icon"><i class="fas fa-money-check-alt fa-fw"></i></div>
                            Harga
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-tv fa-fw"></i></div>
                            Video Tutorial
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>

                @yield('content')

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="/js/dashboard.js"></script>
</body>

</html>