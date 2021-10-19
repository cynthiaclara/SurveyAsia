@extends('layouts.base')
@extends('layouts.nav')

@section('content')

{{--posisikerja --}}
<section class="posisikerja-form" id="posisikerja-form">
    <div class="container">
        <div class="posisikerja pb-5">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h4 class="pt-5 fw-bold">Posisi saya di perusahaan...</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" name="posisi_kerja" id="tempat-kerja"
                            placeholder="Masukkan posisi di perusahaan...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="progress mt-4">
                        <div class="progress-bar bg-default" role="progressbar" style="width: 50%" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <p class="text-orange mt-4">Progress 50%</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <a class="btn btn-orange w-100 text-white text-white" href="/alamat-domisili"
                    role="button">Selanjutnya</a>
            </div>
        </div>
    </div>
</section>
{{-- end posisikerja --}}

@endsection