@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar2')

@section('content')

<section class="hero-blog py-5" id="hero-blog">
    <div class="container">
        <h1 class="text-center">Surveyasia Blog</h1>
        <hr class="hr-vm mx-auto">
        <div class="row py-3">
            <div class="col-md-7">
                <div class="card bg-dark text-light">
                    <img src="/assets/img/blog_1.png" alt="Blog 1" class="img-fluid blog-1">
                    <div class="card-img-overlay align-items-end">
                        <p>Craig Balor - 27 Dec 2020</p>
                        <h4>After All is Said and Done, More is Done</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card bg-dark text-light">
                            <img src="/assets/img/blog_2.png" alt="Blog 2" class="img-fluid blog-2">
                            <div class="card-img-overlay align-items-end">
                                <p>Craig Balor - 27 Dec 2020</p>
                                <h4>After All is Said and Done, More is Done</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-dark text-light">
                            <img src="/assets/img/blog_3.png" alt="Blog 3" class="img-fluid blog-3">
                            <div class="card-img-overlay align-items-end">
                                <p>Craig Balor - 27 Dec 2020</p>
                                <h4>After All is Said and Done, More is Done</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="card bg-dark text-light">
                            <img src="/assets/img/blog_4.png" alt="Blog 4" class="img-fluid blog-4">
                            <div class="card-img-overlay align-items-end">
                                <p>Craig Balor - 27 Dec 2020</p>
                                <h4>After All is Said and Done, More is Done</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection