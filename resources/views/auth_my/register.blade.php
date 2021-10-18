@extends('layouts.base')

@section('content')
  <section class="sign-up-form" id="sign-up-form">
    <div class="row">
      <div class="col-md-5 bg-default py-5 ps-5 text-white">
        <div class="row justify-content-center">
          <div class="col-10 col-sm-8">
            <a href="/" class="text-decoration-none">
              <h3 class="mb-5 fw-bold text-white">Surveyasia</h3>
            </a>
            <h1 class="mt-5 fw-bold">
              Saya melihat Anda pertama kali di sini.
            </h1>
            <p class="mt-3">Dengan bergabung menjadi responden, kamu
              berkesempatan mendapatkan reward menarik.</p>
          </div>
        </div>
        <img src="assets/img/ellipse_orange_gradient.png" alt="Log In"
          class="img-fluid ellipse-orange-gradient position-absolute bottom-0" />
        <img src="assets/img/ellipse_green.png" alt="Log In"
          class="img-fluid ellipse position-absolute bottom-0" />
      </div>
      <div class="col-md-7 sign-up-right justify-content-center">
        <h3 class="mb-3 fw-bold">Buat akun Surveyasia</h3>
        <h6 class="mb-5">Gratis dan mudah</h6>
        <form action="{{ route('register') }}" method="post">
          @csrf
          <div class="row">
            <div class="col">
              <label for="first_name" class="form-label">Nama Depan</label>
              <input type="text"
                class="form-control @error('first_name')is-invalid @enderror"
                name="first_name" placeholder="Ketik nama depan Anda"
                aria-label="Nama Depan" value="{{ old('first_name') }}">
              @error('first_name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="col">
              <label for="last_name" class="form-label">Nama Belakang</label>
              <input type="text"
                class="form-control @error('last_name')is-invalid @enderror"
                name="last_name" placeholder="Ketik Nama belakang Anda"
                aria-label="Nama Belakang" value="{{ old('last_name') }}">
              @error('last_name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mt-3">
              <label for="username" class="form-label">Username</label>
              <input type="username"
                class="form-control @error('username')is-invalid @enderror"
                id="username" name="username" placeholder="Ketik username Anda"
                value="{{ old('username') }}" />
              @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mt-3">
              <label for="email" class="form-label">Email</label>
              <input type="email"
                class="form-control @error('email')is-invalid @enderror"
                id="email" name="email" aria-describedby="emailHelp"
                placeholder="Ketik email Anda" required
                value="{{ old('email') }}" />
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mt-3">
              <label for="password" class="form-label">Password</label>
              <input type="password"
                class="form-control @error('password')is-invalid @enderror"
                id="password" name="password" placeholder="Ketik kata sandi Anda"
                required />
              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
              <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                  Harus minimal 8 karakter
                </span>
              </div>
            </div>
            <div class="checkbox mt-3">
              <label>
                <input type="checkbox" name="checkbox" id="checkbox" value="tac"
                  class="@error('checkbox')is-invalid @enderror" required> Dengan
                membuat akun berarti Anda menyetujui <a href="#"
                  class="link-dark">Syarat dan
                  Ketentuan</a>, serta <a href="#"
                  class="link-dark">Kebijakan Privasi</a> kami
              </label>
              @error('checkbox')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-orange w-100 text-white my-5"
              name="submit">Daftar</button>
        </form>
        <p class="text-center mt-3 text-secondary">atau daftar dengan</p>
        <div class="d-flex justify-content-center">
          <a href="{{-- {{ url('/auth/google') }} --}}"><img src="assets/img/btn_google.png"
              alt="Google" /></a>
          <a href="{{-- {{ url('/auth/facebook') }} --}}"><img src="assets/img/btn_facebook.png"
              alt="Google" /></a>
          <a href="{{-- {{ url('/auth/linkedin') }} --}}"><img src="assets/img/btn_linkedin.png"
              alt="Google" /></a>
        </div>
        <div class="col mt-5 text-center">
          <p>
            Sudah memiliki akun? <a href="/sign-in"
              class="link-default text-decoration-none fw-bold">Masuk Sekarang</a>
          </p>
        </div>
      </div>
    </div>
  </section>

@endsection
