@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar')

@section('content')
{{-- Landing Page --}}
<section class="landing-page" id="landing-page">
    <div class="row flex-md-row-reverse h-75">
        <div class="col-md-6 hero"></div>
        <div class="col-md-6 text-white align-self-center title-landing-page">
            <h1 class="fw-bold">The Fastest Online Research Platform</h1>
            <p class="fw-light mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat possimus labore
                ipsam
                laudantium
                nobis alias voluptatem cumque aut dolores dolorum! Facere possimus repellat delectus cupiditate
                ipsum voluptatem tempore, distinctio sed.
            </p>
            <a class="btn btn-light text-info mt-5" href="/sign-up" role="button">Coba Gratis</a>
        </div>
    </div>
</section>
{{-- Ending Landing Page --}}

{{-- Intro --}}
<section class="intro py-5" id="intro">
    <div class="container">
        <h4 class="fw-bold text-center">Bantu kami untuk Inovasi &<br>Dapatkan Hadian Menarik</h4>
        <div class="row pt-3">
            <div class="col-md-4 text-center">
                <img src="/assets/img/intro_1.png" alt="Intro 1" class="img-fluid">
                <h6 class="fw-bold">Jawabanmu dapat<br>memberikan bantuan</h6>
                <p>Suaramu dapat membantu perubahan masa depan</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="/assets/img/intro_2.png" alt="Intro 2" class="img-fluid">
                <h6 class="fw-bold">Menghabiskan waktu luang<br>yang bermanfaat</h6>
                <p>Dengan waktu 5 - 10 menit tidak akan terasa jika kamu melakukan aktivitas yang bermanfaat dan
                    meyenangkan</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="/assets/img/intro_3.png" alt="Intro 3" class="img-fluid">
                <h6 class="fw-bold">Banyak hadiah yang<br>menanti</h6>
                <p>Kumpulkan hadiah dari setiap survey yang kamu ambil, sebanyak yang kamu mau!</p>
            </div>
        </div>
    </div>
</section>
{{-- End Intro --}}

{{-- Survey Promo --}}
<section class="survey-promo py-5" id="survey-promo">
    <div class="container">
        <h4 class="fw-bold text-center">Dapatkan hadiah dengan hanya isi survey<br>5-10 menit di mana saja</h4>
        <div class="row pt-3 flex-md-row-reverse justify-content-center">
            <div class="col-md-5">
                <img src="/assets/img/survey_promo_1.png" alt="Survey Promo 1" class="img-fluid">
            </div>
            <div class="col-md-5 text-center align-self-center">
                <h3 class="fw-bold">Registrasi</h3>
                <p>Daftar dan isi beberapa pertanyaan<br>singkat tentang anda</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <img src="/assets/img/survey_promo_2.png" alt="Survey Promo 2" class="img-fluid">
            </div>
            <div class="col-md-5 text-center align-self-center">
                <h3 class="fw-bold">Jawab Survey</h3>
                <p>Jawab beberapa survey dan<br>dapatkan point</p>
            </div>
        </div>
        <div class="row flex-md-row-reverse justify-content-center">
            <div class="col-md-5">
                <img src="/assets/img/survey_promo_3.png" alt="Survey Promo 3" class="img-fluid">
            </div>
            <div class="col-md-5 text-center align-self-center">
                <h3 class="fw-bold">Dapatkan Hadiah</h3>
                <p>Tukarkan point anda untuk<br>mendapatkan hadiah</p>
            </div>
        </div>
    </div>
</section>
{{-- End Survey Promo --}}

{{-- Services --}}
<section class="services py-5" id="services">
    <div class="container">
        <h3 class="fw-bold">Layanan yang dapat<br>digunakan</h3>
        <hr>
        <div class="row flex-md-row-reverse py-5">
            <div class="col-md-6">
                <img src="assets/img/service_1.png" alt="Service 1" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold">Template Populer</h3>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nesciunt quos
                    exercitationem, animi
                    dolores autem vel nihil dicta recusandae minima excepturi quasi earum facilis expedita veniam sunt
                    atque porro odio!</p>
                <a class="btn btn-orange text-white rounded-pill px-5" href="#" role="button">Mulai</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="assets/img/service_2.png" alt="Service 2" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold">Kustomisasi</h3>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nesciunt quos
                    exercitationem, animi
                    dolores autem vel nihil dicta recusandae minima excepturi quasi earum facilis expedita veniam sunt
                    atque porro odio!</p>
                <a class="btn btn-orange text-white rounded-pill px-5" href="#" role="button">Mulai</a>
            </div>
        </div>
        <div class="row flex-md-row-reverse">
            <div class="col-md-6">
                <img src="assets/img/service_3.png" alt="Service 3" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold">Real-Time Monitoring</h3>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nesciunt quos
                    exercitationem, animi
                    dolores autem vel nihil dicta recusandae minima excepturi quasi earum facilis expedita veniam sunt
                    atque porro odio!</p>
                <a class="btn btn-orange text-white rounded-pill px-5" href="#" role="button">Mulai</a>
            </div>
        </div>
    </div>
</section>
{{-- End Services --}}

{{-- Register Soon --}}
<section class="register-soon py-5" id="register-soon">
    <div class="container">
        <div class="text-center">
            <p class="text-white fs-3">Daftar segera ada penawaran menarik</p>
            <a class="btn btn-outline-light mt-3" href="/sign-up" role="button">Daftar Segera</a>
        </div>
    </div>
</section>
{{-- End Register Soon --}}
@endsection