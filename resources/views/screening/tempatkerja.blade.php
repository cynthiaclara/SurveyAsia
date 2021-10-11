@extends('layouts.base')
@extends('layouts.nav')

@section('content')

{{--tempatkerja --}}
<section class="tempatkerja-form" id="tempatkerja-form">
    <div class="container">
        <div class="tempatkerja pb-5">
            <h4 class="pt-5 fw-bold text-center">Perusahaan tempat saya kerja...</h4>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="input-group mt-3">
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Pilih pekerjaan mu...</option>
                            <option value="1">PNS</option>
                            <option value="2">TNI / POLRI</option>
                            <option value="3">Pegawai Swasta</option>
                            <option value="3">Wira Usaha</option>
                            <option value="4">Dosen</option>
                            <option value="5">Pelajar / Mahasiswa</option>
                            <option value="6">Lainnya</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mx-auto my-5">
            <a class="btn btn-orange w-100 text-white text-white" href="/posisikerja" role="button">Selanjutnya</a>
        </div>
    </div>
</section>
{{-- end tempatkerja --}}

@endsection