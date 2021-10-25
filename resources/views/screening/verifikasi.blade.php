@extends('layouts.base')
@extends('layouts.nav')

@section('content')
  {{-- verifikasi --}}

<body class="kode">
  <div class="container">
    <div class="row justify-content-center my-5">
      <div class="col-md-5">
         <div class="card mt-5">
                <div class="row">
                        <div class="col-md-11 mx-auto mt-3">
                          
                          <img src="/assets/img/centang.png" alt="centang"
                          width="200" style="margin-left: 30%;">
                          <h4 class="fw-bold mt-3">Your Email Address has been verified</h4>
                        </div>
                </div>
                    <div class="row">
                        <div class="col-md-11 mx-auto mb-5">
                                <a class="btn btn-orange text-white w-100 my-4" href="#" role="button">Continue To client Area ➝</a>
                        </div>
                    </div>     
          </div>
        </div>
      </div>
  </div>
</body>

{{-- end Verifikasi --}}

@endsection
