@extends('layouts.base')
@extends('layouts.nav')

@section('content')

{{--tempatkerja --}}
<section class="tempatkerja-form" id="tempatkerja-form">
    <div class="container">
        <div class="tempatkerja pb-5">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h4 class="pt-5 fw-bold">Perusahaan tempat saya kerja...</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" name="tempat_kerja" id="tempat-kerja"
                            placeholder="Masukkan tempat saya kerja...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="progress mt-4">
                        <div class="progress-bar bg-default" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <p class="text-orange mt-4">Progress 25%</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <a class="btn btn-orange w-100 text-white text-white" href="/posisi-kerja" role="button">Selanjutnya</a>
            </div>
        </div>
    </div>
</section>
{{-- end tempatkerja --}}

@endsection