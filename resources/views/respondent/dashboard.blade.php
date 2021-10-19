@extends('layouts.footer')
@extends('layouts.base')
@extends('respondent.layouts.navbar')

@section('content')

{{-- Header Respondent --}}
<section class="header-respondent pt-5" id="header-respondent">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="card text-light" style="border-radius: 16px">
                    <img src="/assets/img/hero_respondent.png" alt="Respondent" class="img-fluid w-100"
                        style="border-radius: 16px">
                    <div class="card-img-overlay d-flex align-items-center">
                        <h3 class="fw-bold">Selamat Datang di Surveyasia!</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-5 shadow ps-3 py-3" style="border-radius: 16px">
                <div class="row">
                    <div class="col-md-1 me-3">
                        <img src="/assets/img/prof_pic.png" alt="Profile Picture">
                    </div>
                    <div class="col-md-10">
                        <p style="margin-bottom: 0px">Selamat Datang!</p>
                        {{ auth()->user()->name }}
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-1 me-3">
                        <img src="/assets/img/ic_total_balance.svg" alt="Total Balance">
                    </div>
                    <div class="col-md-3">
                        <p class="text-secondary" style="margin-bottom: 0px">Total Saldo</p>
                        <p class="fw-bold">Rp50.000</p>
                    </div>
                    <div class="col-md-1 me-3">
                        <img src="/assets/img/ic_withdraw_balance.svg" alt="Withdraw Balance">
                    </div>
                    <div class="col-md-5">
                        <p class="text-secondary" style="margin-bottom: 0px">Tarik Saldo</p>
                        <a href="/survey/history" class="link-default text-decoration-none">Klik & Cek Riwayat</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
{{-- End Header Respondent --}}

{{-- Recommendation Survey --}}
<section class="recommendation-survey pt-5" id="recommendation-survey">
    <div class="container">
        <h5 class="fw-bold">Rekomendasi untukmu</h5>
        @for ($j = 0; $j < 2; $j++) <div class="row mt-3">
            @for ($i = 0; $i < 4; $i++) <div class="col-md-3">
                <div class="card shadow-sm" style="border-radius: 16px;">
                    <img src="/assets/img/recommendation_survey.png" alt="Recommendation Survey" class="card-img-top"
                        style="border-radius: 16px">
                    <div class="card-body">
                        <h5 class="card-title">Survey promo Big Sale terhadap intensitas belanja</h5>
                        <p class="card-text text-secondary" style="font-size: 12px">by Sarah William - All Level</p>
                        <a href="/survey/pre-survey" class="btn btn-default text-white w-100" role="button">Mulai</a>
                    </div>
                </div>
    </div>
    @endfor
    </div>
    @endfor
    </div>
</section>
{{-- End Recommendation Survey --}}

{{-- Surveyasia News --}}
<section class="surveyasia-news py-5" id="surveyasia-news">
    <div class="container">
        <h5 class="fw-bold">Surveyasia News</h5>
        <div class="row">
            @for ($k = 1; $k <= 4; $k++) <div class="col-md-3">
                <img src="/assets/img/surveyasia_news_{{ $k }}.png" alt="Surveyasia News" class="card-img-top">
                <p class="text-default mt-3"><i class="fas fa-calendar-alt fa-fw"></i> 04 August 2021</p>
                <p>5 Ways on how technology can help your capital raise.</p>
        </div>
        @endfor
    </div>
    </div>
</section> {{-- End Surveyasia News --}}

@endsection