@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar')

@section('content')

<section class="hero-blog pt-5" id="hero-blog">
    <div class="container">
        <h1 class="text-center fw-bold">Surveyasia Blog</h1>
        <hr class="hr-vm mx-auto">
        <div class="row py-3">
            <div class="col-md-7">
                <a href="/blog/detail-blog">
                    <div class="card bg-dark text-light" style="height: 98%">
                        <img src="/assets/img/blog_1.png" alt="Blog 1" class="img-fluid blog-1">
                        <div class="card-img-overlay d-flex align-items-end">
                            <span>
                                <p class="fw-light">Craig Balor - 27 Dec 2020</p>
                                <h3>After All is Said and Done, More is Done</h3>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-6">
                        <a href="/blog/detail-blog">
                            <div class="card bg-dark text-light">
                                <img src="/assets/img/blog_2.png" alt="Blog 2" class="img-fluid blog-2">
                                <div class="card-img-overlay d-flex align-items-end">
                                    <span>
                                        <p class="fw-light">Craig Balor - 27 Dec 2020</p>
                                        <h6>They’re back! Kennedy Darling named to return to</h6>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="/blog/detail-blog">
                            <div class="card bg-dark text-light">
                                <img src="/assets/img/blog_3.png" alt="Blog 3" class="img-fluid blog-3">
                                <div class="card-img-overlay d-flex align-items-end">
                                    <span>
                                        <p class="fw-light">Craig Balor - 27 Dec 2020</p>
                                        <h6>Swiss authorities say Uber drivers should</h6>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <a href="/blog/detail-blog">
                            <div class="card bg-dark text-light">
                                <img src="/assets/img/blog_4.png" alt="Blog 4" class="img-fluid blog-4">
                                <div class="card-img-overlay align-items-end">
                                    <span class="badge bg-default mb-5">New</span>
                                    <p class="fw-light">Craig Balor - 27 Dec 2020</p>
                                    <h4>Tourism in Dubai is booming by international tourist</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="recommendation-blog pt-5" id="recommendation-blog">
    <div class="container">
        <h4 class="fw-bold text-default">Recommendation</h4>
        <hr>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/assets/img/recommendation_1.png" class="d-block w-100" alt="Recommendation 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="fw-bold">Amanda Seyfried became ‘really obsessed’ with ghost stories</h5>
                        <p>Hollywood actress Amanda Seyfried has recalled the time when she became obsessed with ghost
                            stories</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/recommendation_1.png" class="d-block w-100" alt="Recommendation 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/recommendation_1.png" class="d-block w-100" alt="Recommendation 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="row justify-content-between">
                    <div class="col-md-2">
                        <img src="/assets/img/recommendation_4.png" alt="Recommendation 4">
                    </div>
                    <div class="col-md-8">
                        <p class="fw-light">Craig Bator - 27 Dec 2020</p>
                        <h6>Amanda Seyfried became ‘really obsessed’ with ghost stories</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row justify-content-between">
                    <div class="col-md-2">
                        <img src="/assets/img/recommendation_5.png" alt="Recommendation 5">
                    </div>
                    <div class="col-md-8">
                        <p class="fw-light">Craig Bator - 27 Dec 2020</p>
                        <h6>Irrfan Khan’s Last film “ The Song of Scorpions” to release in 2021</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row justify-content-between">
                    <div class="col-md-2">
                        <img src="/assets/img/recommendation_6.png" alt="Recommendation 6">
                    </div>
                    <div class="col-md-8">
                        <p class="fw-light">Craig Bator - 27 Dec 2020</p>
                        <h6>Apee Karim blessed with a daughter</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content-blog pt-5" id="content-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="/assets/img/blog_5.png" alt="Blog 5" class="img-fluid mb-3 w-100">
                <p class="fw-light">11 Agustus 2021</p>
                <h5>Grid membatasi kreatifitas seorang UI Designer?</h5>
                <p class="text-secondary">Apakah benar dengan menggunakan grid sebuah design UI malah menjadi kaku dan
                    tidak kreatif?</p>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/blog_6.png" alt="Blog 6" class="img-fluid mb-3 w-100">
                <p class="fw-light">12 Agustus 2021</p>
                <h5>Grid membatasi kreatifitas seorang UI Designer?</h5>
                <p class="text-secondary">Apakah benar dengan menggunakan grid sebuah design UI malah menjadi kaku dan
                    tidak kreatif?</p>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/blog_7.png" alt="Blog 7" class="img-fluid mb-3 w-100">
                <p class="fw-light">13 Agustus 2021</p>
                <h5>Grid membatasi kreatifitas seorang UI Designer?</h5>
                <p class="text-secondary">Apakah benar dengan menggunakan grid sebuah design UI malah menjadi kaku dan
                    tidak kreatif?</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-md-5 text-center">
                <button type="submit" class="btn btn-outline-default text-dark w-100">Selengkapnya</button>
            </div>
        </div>
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