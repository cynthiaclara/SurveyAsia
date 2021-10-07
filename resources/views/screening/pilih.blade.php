@extends('layouts.base')
@extends('layouts.nav')

@section('content')

{{--pilih --}}

<section class="pilih-form" id="pilih-form">
    <h4 class="mt-5 fw-bold text-center">
        Memulai menggunakan Surveyasia! </h4>
        <p class="mt-3 text-center">Pilihlah salah satu untuk kamu</p>
  <div class="row justify-content-center">
            <div class="col-md-5 pilih-left py-5 ps-5 text-white mt-5">
                    <div class="row justify-content-center">
                        <div class="col-10 col-sm-8">
                            <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                                    <label class="btn btn-light" for="option1"><img src="/assets/img/akun2.png" alt="Researcher" class="img-fluid">
                                         <p class="fw-bold">Researcher</p>
                                    </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 pilih-left py-5 ps-5 text-white mt-5">
                    <div class="row justify-content-center">
                        <div class="col-sm-8">
                            <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" checked>
                                    <label class="btn btn-light" for="option2"><img src="/assets/img/akun1.png" alt="Responden" class="img-fluid">
                                         <p class="fw-bold">Responden</p>
                                    </label>
                        </div>
                    </div>
                </div>
    </div>
                <p class="mt-3 text-center">Pemilihan ini hanya untuk awal pengenalan, selanjutnya anda juga bisa mendapatkan keduanya</p>
                <div class="col mt-3 text-center">
                    <a class="btn btn-primary text-white w-50 text-white my-3" style="background-color:#f8a643" href="tempatkerja" role="button">Selanjutnya</a>
                </div>
                
</section>
@endsection


{{-- end pilih --}}
