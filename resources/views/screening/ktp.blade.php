@extends('layouts.base')
@extends('layouts.nav')

@section('content')
{{-- ktp --}}

<section class="ktp ktp-light bg-light" id="ktp">
<div class="container">
<div class="row">

    <div class="col-1">

    </div>

    <div class="col-10 my-5">
        <p style=" text-align : center;">Surveyasia memerlukan KTP anda untuk melakukan validasi
        <br>dan kami jamin kerahasiaan Anda akan terjaga</p>
        <div id="drop_zone">
	        <h2 align="center">Click to Browser File to Upload</h2>
            <div  class="cari mt-5">
                <h6 style="opacity: 0.5;" align="center"> Tarik gambar KTP yang asli kesini atau
                    <a href="/naon-kek" class="link-warning text-decoration-none">Cari!</a>
                </h6>
            </div>
        </div>

        <p class="mt-3 text-center">Pemilihan ini hanya untuk awal pengenalan, selanjutnya anda juga bisa mendapatkan keduanya
                <br> <a class="btn btn-primary text-white text-white my-3" style="background-color:#f8a643; border-radius: 20px; border-style: none;" href="tempatkerja" role="button">Selanjutnya</a>
            </p>

    </div>

        <div class="col-1">
        </div>
    </div>

    <hr>
    <div class="card mt-5">
  <div class="card-body">
  Gambar identitas & Pas Poto harus terbaca jelas 
  <br />
  <p style="opacity: 0.5;">
 ( Gambar tidak kabur, rusak atau terkena pantulan cahaya ) </p>
  </div>
</div>
<div class="card mt-4">
  <div class="card-body">
    Foto identitas adalah dokumen asli, bukan dokumen fotokopi
  </div>
</div>
<div class="card mt-4 my-5">
  <div class="card-body">
    Identitas yang terdaftar adalah data yang masih berlaku
  </div>
</div>

</div>
            
</section>



@endsection