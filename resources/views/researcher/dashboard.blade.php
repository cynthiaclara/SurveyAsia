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

@endsection