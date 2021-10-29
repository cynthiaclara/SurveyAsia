@extends('layouts.base')

@section('content')

{{-- Verifikasi Email --}}
<section class="kode vh-100">
  <img src="/assets/img/ellipse_orange_gradient.png" alt="Kode"
    class="img-fluid ellipse-orange-gradient position-absolute bottom-0" />
  <img src="/assets/img/ellipse_green.png" alt="Kode" class="img-fluid ellipse position-absolute bottom-0" />
  <img src="/assets/img/ellipse_green1.png" alt="Kode" class="img-fluid ellipse_kode position-absolute top-0" />

  <div class="container">
    <div class="row justify-content-center py-5">
      <div class="col-md-5">
        <div class="card mt-5 p-4">
          <div class="row">
            <a href="/">
              <img src="/assets/img/surveyasia.png" alt="Surveyasia" width="200">
            </a>
            <h4 class="mt-4 fw-bold">Email Anda Belum Diverifikasi</h4>
            <p class="text-muted" style="font-size: 12px;">Gunakan tautan di bawah ini untuk memverifikasi email anda
              dan menikmati Surveyasia</p>
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
              @csrf
              <button type="submit" class="btn btn-orange rounded-pill text-white w-100 mb-3">Send
                Email</button>
            </form>
            <p class="text-muted" style="font-size: 12px;">Pertanyaan? email kami di <a
                href="mailto:feedback@surveyasia.id"
                class="link-default text-decoration-none">feedback@surveyasia.id</a>
            </p>
            <a href="/" class="link-dark text-decoration-none fw-bold"><i class="fas fa-chevron-left"></i>
              Kembali
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{--End Verifikasi Email --}}

@endsection