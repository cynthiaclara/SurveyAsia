@extends('layouts.base')

@section('content')
<section class="sign-in-form" id="sign-in-form">
    <div class="row">
        <div class="col-md-5 sign-in-left py-5 ps-5 text-white">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-8">
                    <a href="/" class="text-decoration-none">
                        <h3 class="mb-5 fw-bold text-white">Surveyasia</h3>
                    </a>
                    <h1 class="mt-5 fw-bold">
                        Mari kita membuat sesuatu yang luar biasa hari ini.
                    </h1>
                    <p class="mt-3">Dengan bergabung menjadi responden, kamu berkesempatan mendapatkan reward menarik.
                    </p>
                </div>
            </div>
            <img src="assets/img/ellipse_orange_gradient.png" alt="Log In"
                class="img-fluid ellipse-orange-gradient position-absolute bottom-0" />
            <img src="assets/img/ellipse_green.png" alt="Log In" class="img-fluid ellipse position-absolute bottom-0" />
        </div>
        <div class="col-md-7 sign-in-right justify-content-center">
            <h1>👋</h1>
            <h3 class="mb-3 fw-bold">Selamat datang kembali!</h3>
            <h6 class="mb-5">Mari membuat sesuatu yang hebat</h6>
            <form action="/sign-in" method="POST">
                @csrf
                @if(session()->has('success'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                   {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="mt-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp"
                        placeholder="Ketik email Anda" autofocus required value="{{ old('email') }}"/>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="********" required />
                </div>
                <button type="submit" class="btn btn-info w-100 text-white mt-5">Masuk</button>
            </form>
            <a href="/forgot-password" class="d-flex justify-content-end link-info text-decoration-none mt-3 mb-5">Lupa
                password?</a>
            <p class="text-center mt-3 text-secondary">atau masuk dengan akun lain</p>
            <div class="d-flex justify-content-center">
                <a href="#"><img src="assets/img/btn_google.png" alt="Google" /></a>
                <a href="#"><img src="assets/img/btn_facebook.png" alt="Google" /></a>
                <a href="#"><img src="assets/img/btn_linkedin.png" alt="Google" /></a>
            </div>
            <div class="col mt-5 text-center">
                <p>
                    Tidak memiliki akun? <a href="/sign-up" class="link-info text-decoration-none fw-bold">Buat Akun</a>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
