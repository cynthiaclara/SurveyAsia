@extends('layouts.base')
@extends('layouts.nav')

@section('content')

{{--posisikerja --}}

<section class="posisikerja-form" id="posisikerja-form">
<div class="posisikerja">
        <p class="mt-5 text-left">Posisi saya ditempat kerja....</p>
            <div class="input-group mb-3" style="width: 55%; height: 50px;">
            <select class="form-select" id="inputGroupSelect01">
                <option selected>Pilih Posisi mu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            </div>               
</div>
                <div class="col text-center my-5">
                    <p class="text-center">70% kelengkapan sebelum mengambil survey</p>
                    <a class="btn btn-primary text-white w-50 text-white" style="background-color:#f8a643" href="posisikerja" role="button">Selanjutnya</a>
                </div>
                
</section>
@endsection


{{-- end posisikerja --}}