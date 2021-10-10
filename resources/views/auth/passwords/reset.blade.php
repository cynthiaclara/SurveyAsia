@extends('layouts.base')

@section('content')
<section class="forgot-password-form" id="forgot-password-form">
  <div class="row">
    <div class="col-md-5 forgot-password-left py-5 ps-5 text-white">
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
      <img src="assets/img/ellipse_orange.png" alt="Log In" class="img-fluid ellipse position-absolute bottom-0" />
    </div>
    <div class="col-md-7 forgot-password-right justify-content-center">
      <h1>🔐</h1>
      <h3 class="mb-3 fw-bold">Atur Ulang Kata Sandi</h3>
      <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <!-- @method("GET") -->
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="mt-3">
          <label for="email" class="form-label">Email Anda</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" aria-describedby="emailHelp"
            placeholder="Ketik email Anda" required autocomplete="email" autofocus/>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
        </div>
        <div class="mt-3">
            <label for="password" class="form-label">New Password</label>
            <input type="password" class="form-control" id="password" name="password"
              placeholder="Masukkan password baru anda"/>
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
               @enderror
          </div>
          <div class="mt-3">
            <label for="password-confirm" class="form-label">Confirm New Password</label>
            <input type="password" class="form-control" id="password-confirm" name="password_confirmation"
              placeholder="Confirm password baru anda"/>
              @error('password_confirmation')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
               @enderror
          </div>
        <button type="submit" class="btn btn-orange w-100 text-white my-3">Reset Password</button>
      </form>
    </div>
  </div>
</section>
@endsection
