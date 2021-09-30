@extends('layouts.footer')
@extends('researcher.layouts.base')
@extends('researcher.layouts.navbar')

@section('content')

<div class="container-fluid p-5">
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-orange text-light"><i class="fas fa-plus fa-fw"></i> Survey
                Baru
            </button>
        </div>
        <div class="col-md-3">
            <form>
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Cari Judul Survey"
                        aria-label="Cari Judul Survey" aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-info text-light" id="btnNavbarSearch" type="button"><i
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
                <h5 class="fw-bold">Survey promo Big Sale terhadap intensitas belanja</h5>
                <p class="fw-light">Dibuat tanggal 02-02-2021</p>
            </div>
        </div>
        <div class="col-md-2 d-flex align-items-center">
            <div class="row text-center">
                <p>Status</p>
                <h6 class="text-info">Active</h6>
            </div>
        </div>
        <div class="col-md-2 d-flex align-items-center">
            <div class="row text-center">
                <p>Pertanyaan</p>
                <h6>20</h6>
            </div>
        </div>
        <div class="col-md-2 d-flex align-items-center">
            <div class="row text-center">
                <h4>10%</h4>
                <p class="fw-light">10/100 <br> Responden</p>
            </div>
        </div>
        <div class="col text-center d-flex align-items-center">
            <a class="dropdown-item" href="#"><i class="fas fa-chevron-down fa-fw"></i></a>
        </div>
    </div>
</div>

@endsection