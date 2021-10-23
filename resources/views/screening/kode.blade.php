@extends('layouts.base')

@section('content')

{{--Kode Verifikasi Email --}}
<body class="kode">
<img src="assets/img/ellipse_orange_gradient.png" alt="Kode" class="img-fluid ellipse-orange-gradient position-absolute bottom-0" />
<img src="assets/img/ellipse_green.png" alt="Kode" class="img-fluid ellipse position-absolute bottom-0" />
<img src="assets/img/ellipse_green.png" alt="Kode" class="img-fluid ellipse_kode position-absolute top-0" />
       
<div class="container">
    <div class="row justify-content-center my-5">
      <div class="col-md-5">
        <div class="card mt-5">
            <div class="row mt-4">
                    <div class="col-md-11 mx-auto">
                    <img src="/assets/img/surveyasia.png" alt="Surveyasia"
                    width="200">
                    </div>
       
                <div class="row">
                        <div class="col-md-11 mx-auto">
                            <p class="pt-4 fw-bold">Kode verifikasi telah dikirim ke Email <br />
                            adnanyazidar@gmail.com</p>
                            <p class="pt-4">Masukkan Kode Verifikasi</p>
                        </div>
           
                    <div class="row">
                        <div class="col-md-11 mx-auto">
                            <div class="input-group">
                                    <div class="mt-3">
                                        <input type="email" max-length="1" class="kode-form-control" id="text" aria-describedby="emailHelp">
                                        <input type="email" class="kode-form-control" id="text" aria-describedby="emailHelp">
                                        <input type="email" class="kode-form-control" id="text" aria-describedby="emailHelp">
                                        <input type="email" class="kode-form-control" id="text" aria-describedby="emailHelp">
                                        <input type="email" class="kode-form-control" id="text" aria-describedby="emailHelp">
                                        <input type="email" class="kode-form-control" id="text" aria-describedby="emailHelp">
                                    </div>
                                         <div class="col-md-12 text-center">
                                            <a class="btn btn-primary text-white w-100 my-4" style="border-radius: 15px;" href="/posisi-kerja" role="button">Submit</a>
                                         </div>
                            </div> 
                                 <div class="col-md-12">
                                    <p> Belum menerima kode? <a href="/pilih" class="link-orange text-decoration-none fw-bold">Kirim Ulang Kode Verifikasi</a>
                                        </p>
                                </div>
                        </div>
                            <div class="col-md-11 mb-3 mx-auto">
                                <p> 
                                    <i class="fas fa-chevron-circle-left"></i>Kembali Ke <a href="/pilih" class="link-primary text-decoration-none fw-bold">Halaman Daftar</a>
                                </p>
                            </div>
                    </div>
                </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</body>

{{-- end Kode Verifikasi Email --}}

@endsection