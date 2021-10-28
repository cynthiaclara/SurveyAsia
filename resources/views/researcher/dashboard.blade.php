@extends('layouts.footer')
@extends('researcher.layouts.base')
@extends('researcher.layouts.navbar')

@section('content')

<div class="container-fluid p-5">
    <div class="row">

        @if(session('verified'))
        <div class="alert alert-success col-md-4 col-md-offset-4" role="alert">
            <p>Verifikasi Berhasil<button type="button" class="btn-close justify-content-end" data-bs-dismiss="alert"
                    aria-label="Close"></button></p>
        </div>
        @endif
        <div class="col">
            {{-- Modal Button --}}
            <button type="button" class="btn btn-orange text-light" data-bs-toggle="modal"
                data-bs-target="#addSurveyModal"><i class="fas fa-plus fa-fw"></i> Survey
                Baru
            </button>

            <!-- Modal -->
            <div class="modal fade" id="addSurveyModal" tabindex="-1" aria-labelledby="addSurveyModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addSurveyModalLabel">Survey Baru</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="titleSurvey" class="form-label">Judul Survey</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" id="titleSurvey"
                                                placeholder="Judul untuk survey anda">
                                        </div>
                                    </div>
                                    {{-- <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label for="titleSurvey" class="form-label">Jenis Survey</label>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>-Pilih-</option>
                                                <option value="1">Free User</option>
                                                <option value="2">Pay per Survey</option>
                                                <option value="3">Join Member</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-default" data-bs-dismiss="modal">Batal</button>
                            <a class="btn btn-default text-white" href="/researcher/create-survey"
                                role="button">Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <form>
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Cari Judul Survey"
                        aria-label="Cari Judul Survey" aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-default text-light" id="btnNavbarSearch" type="button"><i
                            class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-4 py-3 rounded shadow">
        <div class="col">
            <img src="/assets/img/recommendation_4.png" alt="Survey 1">
        </div>
        <div class="col-md-4 d-flex align-items-center">
            <div class="row">
                <div class="col">
                    <h6 class="fw-bold">Survey promo Big Sale terhadap intensitas belanja</h6>
                    <p class="fw-light">Dibuat tanggal 02-02-2021</p>
                </div>
            </div>
        </div>
        <div class="col d-flex align-items-center">
            <div class="row text-center">
                <div class="col">
                    <p class="text-default">Status</p>
                    <h6 class="text-success">Active</h6>
                </div>
            </div>
        </div>
        <div class="col d-flex align-items-center">
            <div class="row text-center">
                <div class="col">
                    <p class="text-default">Design</p>
                    <a href="/researcher/create-survey">
                        <img src="/assets/img/ic_edit.svg" alt="Edit Design" class="img-fluid" width="24">
                    </a>
                </div>
            </div>
        </div>
        <div class="col d-flex align-items-center">
            <div class="row text-center">
                <div class="col">
                    <p class="text-default">Report</p>
                    <a href="/researcher/analytics-result">
                        <img src="/assets/img/ic_report.svg" alt="Report" class="img-fluid" width="24">
                    </a>
                </div>
            </div>
        </div>
        <div class="col d-flex align-items-center">
            <div class="row text-center">
                <div class="col">
                    <p class="text-default">Share</p>
                    <a href="/researcher/status-survey">
                        <img src="/assets/img/ic_share.svg" alt="Share" class="img-fluid" width="24">
                    </a>
                </div>
            </div>
        </div>
        <div class="col text-center d-flex align-items-center">
            <a class="dropdown-item" href="#"><i class="fas fa-chevron-down fa-fw"></i></a>
        </div>
    </div>
</div>

{{-- Modal --}}
<div class="modal fade" id="pricingModal" tabindex="-1" aria-labelledby="pricingModalLabel" aria-hidden="true"
    role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section class="pricing" id="pricing">
                    <div class="row justify-content-center text-center">
                        <div class="col">
                            <h2 class="fw-bold">Pilihan Harga untuk Anda</h2>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <p class="text-secondary">Setting up an investment structure, raiding the neccessary
                                        capital,
                                        and
                                        maintaing
                                        an excellent investor
                                        relation throught the investment life requires well-established processes
                                    </p>
                                </div>
                            </div>
                            {{-- Tab --}}
                            <ul class="nav justify-content-center mt-4" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link link-pricing link-secondary" aria-current="page" href="#"
                                        id="pay-per-survey-tab" data-bs-toggle="tab" data-bs-target="#pay-per-survey"
                                        type="button" role="tab" aria-controls="pay-per-survey" aria-selected="true">
                                        <h4 class="fw-bold mb-5">Pay Per Survey</h4>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link link-pricing link-secondary link-orange text-decoration-underline"
                                        aria-current="page" href="#" id="personal-tab" data-bs-toggle="tab"
                                        data-bs-target="#personal" type="button" role="tab" aria-controls="personal"
                                        aria-selected="true">
                                        <h4 class="fw-bold mb-5">Personal</h4>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link link-pricing link-secondary" aria-current="page" href="#"
                                        id="business-tab" data-bs-toggle="tab" data-bs-target="#business" type="button"
                                        role="tab" aria-controls="business" aria-selected="true">
                                        <h4 class="fw-bold mb-5">Business</h4>
                                    </a>
                                </li>
                            </ul>
                            {{-- End Tab --}}
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="pay-per-survey" role="tabpanel"
                                    aria-labelledby="pay-per-survey-tab">
                                    <div class="container">
                                        <div class="row justify-content-center business-price mb-5" id="business-price">
                                            <div class="col-md-4">
                                                <div class="rounded p-3">
                                                    <h5 class="text-orange">Custom</h5>
                                                    <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Autem quo
                                                        sint,
                                                        sed repellat eius quam?
                                                    </p>
                                                    <h5 class="text-orange">Contact Us</h5>
                                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Quis,
                                                        labore.</p>
                                                    <a class="btn btn-orange text-light w-50 mb-3" href="/contact"
                                                        role="button">Contact
                                                        Us</a>
                                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Quis,
                                                        labore.
                                                    </p>
                                                    @for ($i = 0; $i < 5; $i++) <p>&#10004; Lorem ipsum dolor sit amet
                                                        </p>
                                                        @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="personal" role="tabpanel"
                                    aria-labelledby="personal-tab">
                                    <div class="container">
                                        <div class="row personal-price mb-5" id="personal-price">
                                            <div class="col-md-4">
                                                <div class="rounded p-3">
                                                    <h5 class="text-orange">Basic</h5>
                                                    <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Autem quo
                                                        sint,
                                                        sed repellat eius quam?
                                                    </p>
                                                    <h5 class="text-orange">Rp249.000/bulan</h5>
                                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Quis,
                                                        labore.
                                                    </p>
                                                    <a class="btn btn-orange text-light w-50 mb-3"
                                                        href="/researcher/payment" role="button">Beli</a>
                                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Quis,
                                                        labore.
                                                    </p>
                                                    @for ($i = 0; $i < 5; $i++) <p>&#10004; Lorem ipsum dolor sit amet
                                                        </p>
                                                        @endfor
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="bg-light-default rounded p-3">
                                                    <h5 class="text-default">Essential Annual</h5>
                                                    <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Autem quo
                                                        sint,
                                                        sed repellat eius quam?
                                                    </p>
                                                    <h5 class="text-default">Rp199.000/bulan</h5>
                                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Quis,
                                                        labore.
                                                    </p>
                                                    <a class="btn btn-default text-light w-50 mb-3"
                                                        href="/researcher/payment" role="button">Beli</a>
                                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Quis,
                                                        labore.
                                                    </p>
                                                    @for ($i = 0; $i < 5; $i++) <p>&#10004; Lorem ipsum dolor sit amet
                                                        </p>
                                                        @endfor
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="rounded p-3">
                                                    <h5 class="text-orange">Plus Annual</h5>
                                                    <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Autem quo
                                                        sint,
                                                        sed repellat eius quam?
                                                    </p>
                                                    <h5 class="text-orange">Rp449.000/bulan</h5>
                                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Quis,
                                                        labore.
                                                    </p>
                                                    <a class="btn btn-orange text-light w-50 mb-3"
                                                        href="/researcher/payment" role="button">Beli</a>
                                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Quis,
                                                        labore.
                                                    </p>
                                                    @for ($i = 0; $i < 5; $i++) <p>&#10004; Lorem ipsum dolor sit amet
                                                        </p>
                                                        @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
                                    <div class="container">
                                        <div class="row business-price mb-5" id="business-price">
                                            <div class="col-md-4">
                                                <div class="rounded p-3">
                                                    <h5 class="text-orange">Advantage</h5>
                                                    <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Autem quo
                                                        sint,
                                                        sed repellat eius quam?
                                                    </p>
                                                    <h5 class="text-orange">Rp1.099.000/user</h5>
                                                    <p class="text-secondary">Minimal 3 User</p>
                                                    <a class="btn btn-orange text-light w-50 mb-3"
                                                        href="/researcher/payment" role="button">Beli</a>
                                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Quis,
                                                        labore.
                                                    </p>
                                                    @for ($i = 0; $i < 5; $i++) <p>&#10004; Lorem ipsum dolor sit amet
                                                        </p>
                                                        @endfor
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="bg-light-default rounded p-3">
                                                    <h5 class="text-default">Enterprise</h5>
                                                    <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Autem quo
                                                        sint,
                                                        sed repellat eius quam?
                                                    </p>
                                                    <h5 class="text-default">Rp1.999.000/user</h5>
                                                    <p class="text-secondary">Minimal 5 User</p>
                                                    <a class="btn btn-default text-light w-50 mb-3"
                                                        href="/researcher/payment" role="button">Beli</a>
                                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Quis,
                                                        labore.
                                                    </p>
                                                    @for ($i = 0; $i < 5; $i++) <p>&#10004; Lorem ipsum dolor sit amet
                                                        </p>
                                                        @endfor
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="rounded p-3">
                                                    <h5 class="text-orange">Corporate</h5>
                                                    <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Autem quo
                                                        sint,
                                                        sed repellat eius quam?
                                                    </p>
                                                    <h5 class="text-orange">Contact Us</h5>
                                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Quis,
                                                        labore.
                                                    </p>
                                                    <a class="btn btn-orange text-light w-50 mb-3" href="/contact"
                                                        role="button">Contact
                                                        Us</a>
                                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing
                                                        elit.
                                                        Quis,
                                                        labore.
                                                    </p>
                                                    @for ($i = 0; $i < 5; $i++) <p>&#10004; Lorem ipsum dolor sit amet
                                                        </p>
                                                        @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
{{-- End Modal --}}

@endsection