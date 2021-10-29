@extends('layouts.base')
@extends('layouts.nav')

@section('content')

{{--Device --}}
<section class="Device-form" id="Device-form">
    <div class="container">
        <h6 class="pt-5 fw-bold" style="margin-left: 9%;">
            Saya Menggunakan Device... </h6>
        <div class="row text-center">
            <div class="col-md-6 mt-5">
                <input type="radio" class="btn-check" name="Android" id="Android" autocomplete="off" value="Android">
                <label class="btn btn-light" for="Android"> <img src="/assets/img/Android.png" alt="Android"
                        class="img-fluid rounded p-4">
                    <p class="fw-bold">Android</p>
                </label>
            </div>
            <div class="col-md-6 mt-5">
                <input type="radio" class="btn-check" name="options" id="Ios" autocomplete="off">
                <label class="btn btn-light" for="Ios"> <img src="/assets/img/Ios.png" alt="Responden"
                        class="img-fluid rounded p-4">
                    <p class="fw-bold">Ios</p>
                </label>
            </div>
        </div>
        <div class="col mt-3 text-center">
        <img src="/assets/img/w-25.png">
        <p class="text-orange mt-4">Progress 25%</p>
        </div>
         
        <div class="col mt-3 text-center">
            <a class="btn btn-primary text-white w-50 text-white my-3" disabled onclick="RolesButton() "
                role="button">Selanjutnya</a>
        </div>
    </div>
</section>
{{-- end Device --}}

@endsection
