@extends('layouts.base')
@extends('layouts.nav')

@section('content')

{{--tempatkerja --}}
<section class="tempatkerja-form" id="tempatkerja-form">
    <div class="container">
        <div class="tempatkerja pb-5">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h4 class="pt-5 fw-bold">Alamat domisili saat ini...</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="input-group mt-3">
                        <textarea class="form-control" id="alamat_domisili" rows="3"
                            placeholder="Alamat saat ini..."></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="progress mt-4">
                        <div class="progress-bar bg-default" role="progressbar" style="width: 75%" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <p class="text-orange mt-4">Progress 75%</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <a class="btn btn-orange w-100 text-white text-white" href="/respondent/dashboard" role="button">Selanjutnya</a>
            </div>
        </div>
    </div>
</section>
{{-- end tempatkerja --}}

@endsection
