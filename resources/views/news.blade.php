@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar')

@section('content')

<section class="news pt-5" id="news">
    <div class="container">
        <h1 class="text-center fw-bold">Surveyasia News</h1>
        <hr class="hr-vm mx-auto">
        {{-- News Category --}}
        <nav class="nav mt-5 mb-3">
            <a class="nav-link link-orange active" aria-current="page" href="#">All Post</a>
            <a class="nav-link link-secondary" href="#">Business</a>
            <a class="nav-link link-secondary" href="#">Study</a>
            <a class="nav-link link-secondary" href="#">Hobby</a>
            <a class="nav-link link-secondary" href="#">Productivity</a>
            <a class="nav-link link-secondary" href="#">Surveyasia</a>
            <form class="ms-auto">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Cari" aria-label="Cari"
                        aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-default text-light" id="btnNavbarSearch" type="button"><i
                            class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </nav>
        {{-- End News Category --}}
        <div class="row">
            <div class="col-md-4">
                <div>
                    <a href="/news/detail-news" class="link-dark text-decoration-none">
                        <img src="/assets/img/blog_5.png" alt="Blog 5" class="img-fluid mb-3 w-100">
                        <p class="fw-light">11 Agustus 2021</p>
                        <h5>Grid membatasi kreatifitas seorang UI Designer?</h5>
                        <p class="text-secondary">Apakah benar dengan menggunakan grid sebuah design UI malah menjadi
                            kaku dan
                            tidak kreatif?
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <a href="/news/detail-news" class="link-dark text-decoration-none">
                        <img src="/assets/img/blog_6.png" alt="Blog 6" class="img-fluid mb-3 w-100">
                        <p class="fw-light">12 Agustus 2021</p>
                        <h5>Grid membatasi kreatifitas seorang UI Designer?</h5>
                        <p class="text-secondary">Apakah benar dengan menggunakan grid sebuah design UI malah menjadi
                            kaku dan
                            tidak kreatif?</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <a href="/news/detail-news" class="link-dark text-decoration-none">
                        <img src="/assets/img/blog_7.png" alt="Blog 7" class="img-fluid mb-3 w-100">
                        <p class="fw-light">13 Agustus 2021</p>
                        <h5>Grid membatasi kreatifitas seorang UI Designer?</h5>
                        <p class="text-secondary">Apakah benar dengan menggunakan grid sebuah design UI malah menjadi
                            kaku dan
                            tidak kreatif?</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <img src="/assets/img/detail_blog_3.png" alt="Blog 5" class="img-fluid mb-3 w-100">
                <p class="fw-light">11 Agustus 2021</p>
                <h5>Grid membatasi kreatifitas seorang UI Designer?</h5>
                <p class="text-secondary">Apakah benar dengan menggunakan grid sebuah design UI malah menjadi kaku dan
                    tidak kreatif?</p>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/detail_blog_4.png" alt="Blog 6" class="img-fluid mb-3 w-100">
                <p class="fw-light">12 Agustus 2021</p>
                <h5>Grid membatasi kreatifitas seorang UI Designer?</h5>
                <p class="text-secondary">Apakah benar dengan menggunakan grid sebuah design UI malah menjadi kaku dan
                    tidak kreatif?</p>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/detail_blog_5.png" alt="Blog 7" class="img-fluid mb-3 w-100">
                <p class="fw-light">13 Agustus 2021</p>
                <h5>Grid membatasi kreatifitas seorang UI Designer?</h5>
                <p class="text-secondary">Apakah benar dengan menggunakan grid sebuah design UI malah menjadi kaku dan
                    tidak kreatif?</p>
            </div>
        </div>
        @for ($i = 0; $i < 3; $i++) <div class="row mt-5">
            <div class="col-md-4">
                <img src="/assets/img/news_1.png" alt="Blog 5" class="img-fluid mb-3 w-100">
                <p class="fw-light">11 Agustus 2021</p>
                <h5>Grid membatasi kreatifitas seorang UI Designer?</h5>
                <p class="text-secondary">Apakah benar dengan menggunakan grid sebuah design UI malah menjadi kaku dan
                    tidak kreatif?</p>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/news_2.png" alt="Blog 6" class="img-fluid mb-3 w-100">
                <p class="fw-light">12 Agustus 2021</p>
                <h5>Grid membatasi kreatifitas seorang UI Designer?</h5>
                <p class="text-secondary">Apakah benar dengan menggunakan grid sebuah design UI malah menjadi kaku dan
                    tidak kreatif?</p>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/news_3.png" alt="Blog 7" class="img-fluid mb-3 w-100">
                <p class="fw-light">13 Agustus 2021</p>
                <h5>Grid membatasi kreatifitas seorang UI Designer?</h5>
                <p class="text-secondary">Apakah benar dengan menggunakan grid sebuah design UI malah menjadi kaku dan
                    tidak kreatif?</p>
            </div>
    </div>
    @endfor
    </div>
</section>

{{-- Surveyasia TV --}}
<section class="surveyasia-tv py-5 mb-5" id="surveyasia-tv">
    <div class="container">
        <h4 class="fw-bold text-default">Surveyasia TV</h4>
        <hr>
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/tb-LMYEpIsQ" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
        {{-- <div class="row mt-3">
            <div class="col-md-4">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kwf-xhrE7nI"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <p class="fw-light">Craig Bator - 27 Dec 2020</p>
                <h6>At Value-Focused Hotels, the Free Breakfast Gets Bigger</h6>
            </div>
            <div class="col-md-4">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/zOdw80EOmwc"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <p class="fw-light">Craig Bator - 27 Dec 2020</p>
                <h6>Failure is the condiment that gives success its flavor</h6>
            </div>
            <div class="col-md-4">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/1rduslcL3z8"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <p class="fw-light">Craig Bator - 27 Dec 2020</p>
                <h6>Les nouveaux maillots du Real Madrid pour la saison</h6>
            </div>
        </div> --}}
        <div class="row mt-3 pb-5">
            @foreach ($videoList->items as $key => $item)
            <div class="col-md-4">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{ $item->id->videoId }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <p class="fw-light">{{ $item->snippet->channelTitle }} -
                    {{ date('d M Y', strtotime($item->snippet->publishTime)) }}</p>
                <h6>{{ $item->snippet->title }}</h6>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{-- Surveyasia TV --}}

@endsection