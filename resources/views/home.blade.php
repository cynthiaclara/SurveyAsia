@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar')

@section('content')

  {{-- Landing Page --}}
  <section class="landing-page bg-default" id="landing-page">
    <div class="row flex-md-row-reverse h-75">
      <div class="col-md-6 hero"></div>
      <div class="col-md-6 text-white align-self-center title-landing-page">
        <h1 class="fw-bold">Mau membuat Survei dengan Mudah? Kami Solusinya!
        </h1>
        <p class="fw-light mt-3">Kami akan membantu Anda menetapkan tujuan untuk
          survei Anda dan merancang untuk
          mencapainya.
          Klik, rancang, dan simpan hal yang paling penting bagi Anda, semuanya di
          satu tempat.
        </p>
        <a class="btn btn-light text-default fw-bold mt-5 py-3 px-5"
          href="/sign-up" role="button">Coba Gratis</a>
      </div>
    </div>
  </section>
  {{-- Ending Landing Page --}}

  {{-- Intro --}}
  <section class="intro py-5" id="intro">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <h2 class="fw-bold">Mudah, Aman, dan Terpercaya Gunakan
            Kesempatan Anda untuk Bergabung Bersama Kami
          </h2>
        </div>
      </div>

      <div class="row flex-md-row-reverse pt-5">
        <div class="col-md-7 text-end">
          <img src="/assets/img/our_advantages.png" alt="Our Advantages"
            class="img-fluid" width="350">
        </div>
        <div class="col-md-5">
          <h4 class="fw-bold">Keunggulan Kami </h4>
          <p>Membuat survei lebih mudah dengan berbagai jenis format pertanyaan
            dan jawaban. Mendapatkan responden
            dengan mudah dan terpercaya. Kustomisasi chart report sesuai
            kebutuhan. Download report dalam
            berbagai format. Harga terjangkau dan sesuai dengan kebutuhan.</p>
          <a class="btn btn-orange text-light mt-5 py-3 px-5"
            href="{{ route('register') }}" role="button">Buat Survei</a>
        </div>
      </div>
  </section>
  {{-- End Intro --}}

  {{-- Services --}}
  <section class="services py-5" id="services">
    <div class="container">
      <h3 class="fw-bold">Layanan Kami</h3>
      <hr>
      <div class="row flex-md-row-reverse py-5">
        <div class="col-md-8 text-end">
          <img src="assets/img/service_1.png" alt="Service 1"
            class="img-fluid">
        </div>
        <div class="col-md-4 align-self-center">
          <h3 class="fw-bold">Format Populer</h3>
          <p class="mt-4">Kami menyediakan berbagai format populer untuk
            menunjang kebutuhan Anda. Tinggal Klik
            dan dapatkan berbagai macam format menarik.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <img src="assets/img/service_2.png" alt="Service 2"
            class="img-fluid">
        </div>
        <div class="col-md-4 align-self-center">
          <h3 class="fw-bold">Mudah disesuaikan</h3>
          <p class="mt-4">Surveyasia cepat dan mudah dibuat: siapkan dan
            bagikan survei cantik dalam hitungan
            menit. Gunakan Integrasi untuk mengirim data secara otomatis ke mana
            pun Anda inginkan.
          </p>
        </div>
      </div>
      <div class="row flex-md-row-reverse">
        <div class="col-md-8 text-end">
          <img src="assets/img/service_3.png" alt="Service 3"
            class="img-fluid">
        </div>
        <div class="col-md-4 align-self-center">
          <h3 class="fw-bold">Pantau setiap saat</h3>
          <p class="mt-4">SurveyAsia menanggapi jawaban sebelumnya untuk
            hanya menampilkan pertanyaan yang paling
            relevan. Pengalaman yang lebih baik untuk responden = data yang lebih
            baik untuk Anda dan disajikan
            dalam laporan dan metrik yang jelas.</p>
        </div>
      </div>
      <div class="row justify-content-center mt-5">
        <div class="col-md-3">
          <a href="/sign-up" class="btn btn-orange text-white py-3 w-100"
            role="button">Ayo jadi Researcher</a>
        </div>
      </div>
    </div>
  </section>
  {{-- End Services --}}

  {{-- Intro 2 --}}
  <section class="intro-2 py-5" id="intro-2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <h4 class="fw-bold text-center">Bantu kami untuk berinovasi dengan
            mengisi survei </h4>
        </div>
      </div>
      <div class="row pt-3">
        <div class="col-md-4 text-center">
          <img src="/assets/img/intro_1.png" alt="Intro 1" class="img-fluid">
          <h6 class="fw-bold">Jawabanmu dapat <br> membantu kami</h6>
          <p>Suaramu dapat membantu perubahan masa depan</p>
        </div>
        <div class="col-md-4 text-center">
          <img src="/assets/img/intro_2.png" alt="Intro 2" class="img-fluid">
          <h6 class="fw-bold">Menghabiskan waktu luang <br> yang bermanfaat
          </h6>
          <p>Dengan waktu 5 - 10 menit tidak akan terasa jika kamu melakukan
            aktivitas yang bermanfaat dan
            menyenangkan</p>
        </div>
        <div class="col-md-4 text-center">
          <img src="/assets/img/survey_promo_2.png" alt="Intro 3"
            class="img-fluid">
          <h6 class="fw-bold">Mudah dalam <br> pengisian Survei</h6>
          <p>Desain yang elegan dan nyaman akan mempermudah anda dalam mengisi
            survei</p>
        </div>
      </div>
    </div>
  </section>
  {{-- End Intro 2 --}}

  {{-- Survey Promo --}}
  <section class="survey-promo py-5" id="survey-promo">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <h4 class="fw-bold text-center">Dapatkan hadiah dengan hanya isi survei
            5 - 10 menit di mana saja</h4>
        </div>
      </div>
      <div class="row pt-3 flex-md-row-reverse justify-content-center">
        <div class="col-md-5">
          <img src="/assets/img/survey_promo_1.png" alt="Survey Promo 1"
            class="img-fluid">
        </div>
        <div class="col-md-5 text-center align-self-center">
          <h3 class="fw-bold">Registrasi</h3>
          <p>Daftar dan isi beberapa pertanyaan <br> singkat tentang anda</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-5">
          <img src="/assets/img/intro_3.png" alt="Survey Promo 2"
            class="img-fluid">
        </div>
        <div class="col-md-5 text-center align-self-center">
          <h3 class="fw-bold">Dapatkan hadiah</h3>
          <p>Jawab beberapa survei dan dapatkan <br> hadiah berupa uang tunai yang
            dapat <br> ditukarkan dengan
            hadiah
            menarik!</p>
        </div>
      </div>
      <div class="row justify-content-center mt-5">
        <div class="col-md-3">
          <a href="/sign-up" class="btn btn-default text-white py-3 w-100"
            role="button">Bergabung
            Responden</a>
        </div>
      </div>
    </div>
  </section>
  {{-- End Survey Promo --}}

@endsection
