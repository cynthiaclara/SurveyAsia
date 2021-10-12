@extends('layouts.base')
@extends('layouts.nav')

@section('content')

{{--pilih --}}
<section class="pilih-form" id="pilih-form">
    <div class="container">
        <h4 class="pt-5 fw-bold text-center">
            Memulai menggunakan Surveyasia! </h4>
        <p class="mt-3 text-center">Pilihlah salah satu untuk kamu</p>
        <div class="row text-center">
            <div class="col-md-6 mt-5">
                <input type="radio" class="btn-check" name="researcher" id="researcher" autocomplete="off">
                <label class="btn btn-light" for="researcher"> <img src="/assets/img/akun2.png" alt="Researcher"
                        class="img-fluid rounded p-4">
                    <p class="fw-bold">Researcher</p>
                </label>
            </div>
            <div class="col-md-6 mt-5">
                <input type="radio" class="btn-check" name="options" id="respondent" autocomplete="off">
                <label class="btn btn-light" for="respondent"> <img src="/assets/img/akun1.png" alt="Responden"
                        class="img-fluid rounded p-4">
                    <p class="fw-bold">Respondent</p>
                </label>
            </div>
        </div>
        <p class="mt-3 text-center">*Pemilihan ini hanya untuk awal pengenalan, selanjutnya anda juga bisa mendapatkan
            keduanya</p>
        <div class="col mt-3 text-center">
            <a class="btn btn-orange text-white w-50 text-white my-3" disabled onclick="RolesButton() "
                role="button">Selanjutnya</a>
        </div>
    </div>
</section>
{{-- end pilih --}}

@endsection
