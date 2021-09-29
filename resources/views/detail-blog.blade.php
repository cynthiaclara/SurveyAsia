@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar2')

@section('content')

<section class="header-detail-blog pt-5" id="header-detail-blog">
    <div class="container">
        <h1 class="text-center fw-bold">A few words about this blog <br> platform, Ghost, and how this site was made
        </h1>
        <img src="/assets/img/detail_blog_1.png" alt="Detail Blog" class="img-fluid w-100 my-5">
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-3">
                        <img src="/assets/img/prof_pic.png" alt="Profile Picture" class="img-fluid" width="70">
                    </div>
                    <div class="col-md-9">
                        <p class="fw-bold">MIKA MATIKAINEN</p>
                        <p class="fw-light">Apr 15, 2020 - 4 min read</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <p class="fw-bold">Share on Facebook</p>
            </div>
            <div class="col-md-4 text-center">
                <p class="fw-bold">Share on Twitter</p>
            </div>
        </div>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit ducimus placeat quasi beatae, debitis rem in
            cum, nemo doloremque, accusamus voluptates laudantium dicta dolores est veritatis iure vel ea? Esse?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum omnis doloribus temporibus? Id ducimus,
            beatae at doloribus corrupti dolores doloremque hic adipisci labore vitae, dolorum a quo aliquam delectus
            cum?</p>
        <h5 class="fw-bold">Next on the pipeline</h5>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, praesentium at error omnis velit illo
            quia quod! Recusandae quasi odit itaque praesentium impedit voluptatum eaque est adipisci, quae, dolore
            voluptas.</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem praesentium ipsa quae, vitae aliquam
            nobis architecto reiciendis maiores aut, eos minus. Reprehenderit sequi officia repellat nam. Earum porro
            soluta quis?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error culpa ipsa sit sequi maiores aliquam modi,
            pariatur doloribus exercitationem non fuga rem ullam ipsam cum facere doloremque, quae quaerat. Error?</p>
        <img src="/assets/img/detail_blog_2.png" alt="Detail Blog 2" class="img-fluid w-100 my-5">
        <p>A list looks like this:</p>
        <ul>
            <li>First item in the list</li>
            <li>Second item in the list Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore libero
                consequuntur perspiciatis tempora quod. Deserunt accusantium, cum placeat, dignissimos corporis
                distinctio ipsum recusandae magni doloribus, unde iste dicta incidunt vitae.</li>
            <li>Thrid item in the list</li>
        </ul>
        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam quis
            posuere ligula.</p>
        <p>Thanks for reading, <br> Mika</p>
    </div>
</section>

<section class="other-blog py-5" id="other-blog">
    <div class="container">
        <h6>Tulisan Lainnya</h6>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <img src="/assets/img/detail_blog_3.png" alt="Detail Blog 3" class="img-fluid w-100 mb-3">
                <p class="fw-light">11 Agustus 2021</p>
                <h5>Grid membatasi kreatifitas seorang UI Designer?</h5>
                <div class="row">
                    <div class="col-md-2">
                        <img src="/assets/img/prof_pic.png" alt="Profile Picture" width="60">
                    </div>
                    <div class="col-md-10">
                        <p class="fw-bold">Jessie Yeung</p>
                        <p class="fw-light">22 September 2021</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/detail_blog_4.png" alt="Detail Blog 4" class="img-fluid w-100 mb-3">
                <p class="fw-light">12 Agustus 2021</p>
                <h5>Grid membatasi kreatifitas seorang UI Designer?</h5>
                <div class="row">
                    <div class="col-md-2">
                        <img src="/assets/img/prof_pic.png" alt="Profile Picture" width="60">
                    </div>
                    <div class="col-md-10">
                        <p class="fw-bold">Jessie Yeung</p>
                        <p class="fw-light">22 September 2021</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/detail_blog_5.png" alt="Detail Blog 5" class="img-fluid w-100 mb-3">
                <p class="fw-light">13 Agustus 2021</p>
                <h5>Grid membatasi kreatifitas seorang UI Designer?</h5>
                <div class="row">
                    <div class="col-md-2">
                        <img src="/assets/img/prof_pic.png" alt="Profile Picture" width="60">
                    </div>
                    <div class="col-md-10">
                        <p class="fw-bold">Jessie Yeung</p>
                        <p class="fw-light">22 September 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection