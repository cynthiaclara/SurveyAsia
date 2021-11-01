@extends('layouts.footer')
@extends('researcher.layouts.base')
@extends('researcher.layouts.navbar')

@section('content')

<section class="tutorial p-5" id="tutorial">
    <div class="container-fluid">
        <h4 class="fw-bold">Video Tutorial</h4>
        <div class="card text-light mt-3">
            <img src="/assets/img/hero_tutorial.png" alt="Hero Tutorial" class="img-fluid hero-tutorial"
                style="border-radius: 16px">
            <div class="card-img-overlay d-flex align-items-center">
                <h1>Ada banyak hal yang <br> bisa kamu pelajari di sini</h1>
            </div>
        </div>
        <h5 class="text-orange mt-5">Rekomendasi Video Untukmu</h5>
        <div class="row mt-3">
            @for ($i = 0; $i < 4; $i++) <div class="col-xl-3 col-md-6 col-sm-12">
                <a href="#" class="link-dark text-decoration-none">
                    <div class="card shadow">
                        <img src="https://images.unsplash.com/photo-1511576661531-b34d7da5d0bb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                            class="card-img-top" alt="Video {{ $i }}" style="border-radius: 16px 16px 0px 0px">
                        <div class="card-body">
                            <h5 class="card-title">Basic how to ride your skateboard comfortly</h5>
                            <p class="card-text text-muted m-0">Andy William</p>
                            <p class="card-text text-muted">53K Ditonton</p>
                        </div>
                    </div>
                </a>
        </div>
        @endfor
    </div>
    <h5 class="text-orange mt-5">Artikel</h5>
    <hr>
    <div class="row mt-3">
        @for ($i = 0; $i < 4; $i++) <div class="col-xl-3 col-md-6 col-sm-12">
            <div>
                <a href="/news/detail-news" class="link-dark text-decoration-none">
                    <img src="/assets/img/blog_6.png" alt="Blog 5" class="img-fluid mb-3 w-100">
                    <p class="fw-light">11 Agustus 2021</p>
                    <h5>Grid membatasi kreatifitas seorang UI Designer?</h5>
                </a>
            </div>
    </div>
    @endfor
    </div>
    </div>
</section>

@endsection