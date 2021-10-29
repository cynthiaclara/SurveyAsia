@extends('layouts.base')

@section('content')

{{--Kode Verifikasi Email --}}
<body class="kode">
<img src="assets/img/ellipse_orange_gradient.png" alt="Kode" class="img-fluid ellipse-orange-gradient position-absolute bottom-0" />
<img src="assets/img/ellipse_green1.png" alt="Kode" class="img-fluid ellipse position-absolute bottom-0" />
<img src="assets/img/ellipse_green1.png" alt="Kode" class="img-fluid ellipse_kode position-absolute top-0" />
       
<div class="container">
    <div class="row justify-content-center my-5">
      <div class="col-md-5">
        <div class="card mt-5">

            <div class="row mt-5">
                    <div class="col-md-11 mx-auto">
                    <img src="/assets/img/surveyasia.png" alt="Surveyasia"
                    width="200">
                    </div>
       
                <div class="row">
                        <div class="col-md-11 mx-auto">
                            <h4 class="pt-4 fw-bold">Verifikasi Email Anda</h4>
                        </div>

                       
                        <div class="col-md-15 mx-auto">
                        <p class="card-body" style=" font-size: 15px; ">Hai adnan! Gunakan tautan di bawah ini untuk memverifikasi <br>
                            email anda dan menikmati Surveyasia </p>
                        </div>
                       
                    
                        <div class="col-md-11 mx-auto text-center">
                                            <a class="btn btn-orange btn-lg text-white w-100 my-2" style="border-radius: 30px;" href="#" role="button"><label style=" font-size: 15px; " > Resend Email</label></a>
                                            
                        </div>

                        <div class="col-md-11 mt-3 mx-auto">
                            <p style=" font-size: 15px;">Pertanyaan? email kami di  <a href="#" class="link-primary text-decoration-none">foodback@surveyasia.com</a>
                                        </p> 
                            </div>

                            <div class="col-md-11 mb-3 mx-auto">
                            <p> 
                                <i class="fas fa-chevron-left"></i> <a href="#" class="link-dark text-decoration-none fw-bold">Kembali</a>
                                   
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
</div>
</body>

{{-- end Kode Verifikasi Email --}}

@endsection