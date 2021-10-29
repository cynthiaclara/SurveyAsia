@extends('layouts.base')
@extends('layouts.nav')

@section('content')

{{--Ios --}}
<section class="Ios-form" id="Ios-form">
    <div class="container">
        <h4 class="pt-5 fw-bold text-center mt-5">
            Saya Pengguna Iphone X</h4>
        <div class="row text-center">
            <div class="col-md-6 mt-5">
                <input type="radio" class="btn-check" name="Iya" id="Iya" autocomplete="off" value="Iya">
                <label class="btn btn-light" for="Iya"> <img src="/assets/img/Iya.png" alt="Iya"
                        class="img-fluid rounded p-4">
                </label>
            </div>
            <div class="col-md-6 mt-5">
                <input type="radio" class="btn-check" name="options" id="Tidak" autocomplete="off">
                <label class="btn btn-light" for="Tidak"> <img src="/assets/img/Tidak.png" alt="Responden"
                        class="img-fluid rounded p-4">
                </label>
            </div>
        </div>
        <div class="col mt-5 text-center">
        <img src="/assets/img/w-25.png">
        <p class="text-orange mt-4">Progress 25%</p>
        </div>
    
         
        <div class="col mt-5 text-center">
            <a class="btn btn-primary text-white w-50 text-white my-3" disabled onclick="RolesButton() "
                role="button">Selanjutnya</a>
        </div>
    </div>
</section>
{{-- end Ios --}}

@endsection
