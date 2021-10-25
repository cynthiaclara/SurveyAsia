@extends('layouts.footer')
@extends('layouts.base')
@extends('survey.layouts.header')
@extends('respondent.layouts.navbar')

@section('content')

{{-- Survey Change Point --}}
<section class="change-point-survey pb-5" id="change-point-survey">
  <div class="container">
    {{-- Tab --}}
    <ul class="nav nav-pills mt-5 mb-3 justify-content-center" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-transfer-tab" data-bs-toggle="pill" data-bs-target="#pills-transfer"
          type="button" role="tab" aria-controls="pills-transfer" aria-selected="true">Transfer e-wallet</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-top-up-tab" data-bs-toggle="pill" data-bs-target="#pills-top-up"
          type="button" role="tab" aria-controls="pills-top-up" aria-selected="false">Isi
          pulsa</button>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-transfer" role="tabpanel" aria-labelledby="pills-transfer-tab">
        <h6 class="fw-bold">Tukar saldo ke bentuk e-wallet</h6>
        <p class="text-muted">(Memerlukan waktu 24 jam untuk pengisian
          e-wallet)</p>
        <div class="col-md-4">
          <div class="card border-success py-5">
            <div class="card-body">
              <img src="/assets/img/e-wallet_1.png" alt="E-Wallet" width="70">
              <div class="row">
                <div class="col">
                  <p>085******2289</p>
                </div>
                <div class="col">
                  <p class="text-success">Nomor terverifikasi</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h6 class="fw-bold mt-5">Pilih nominal e-wallet yang ingin kamu
          tukarkan</h6>
        <div class="row">
          <div class="col-md-2">
            <div class="card border-success text-center pt-3">
              <div class="card-body">
                <p>25.000</p>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card text-center pt-3">
              <div class="card-body">
                <p>50.000</p>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card text-center pt-3">
              <div class="card-body">
                <p>100.000</p>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card text-center pt-3">
              <div class="card-body">
                <p>200.000</p>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card text-center pt-3">
              <div class="card-body">
                <p>300.000</p>
              </div>
            </div>
          </div>
        </div>
        <a class="btn btn-orange rounded-pill text-white my-4 px-5" href="#" role="button" data-bs-toggle="modal"
          data-bs-target="#eWalletModal">Tukarkan saldo</a>
        <hr>
        <p>Kami mendukung:</p>
        @for ($i = 1; $i <= 3; $i++) <img src="/assets/img/e-wallet_{{ $i }}.png" alt="E-Wallet" width="70"
          class="me-3">
          @endfor
      </div>
      <div class="tab-pane fade" id="pills-top-up" role="tabpanel" aria-labelledby="pills-top-up-tab">
        <h6 class="fw-bold">Tukar saldo ke bentuk pulsa</h6>
        <p class="text-muted">(Memerlukan waktu 24 jam untuk pengisian
          pulsa)</p>
        <div class="col-md-4">
          <div class="card border-success py-5">
            <div class="card-body">
              <img src="/assets/img/pulsa_1.png" alt="Pulsa" width="70">
              <div class="row">
                <div class="col">
                  <p>085******2289</p>
                </div>
                <div class="col">
                  <p class="text-success">Nomor terverifikasi</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h6 class="fw-bold mt-5">Pilih nominal pulsa yang ingin kamu tukarkan
        </h6>
        <div class="row">
          <div class="col-md-2">
            <div class="card border-success text-center pt-3">
              <div class="card-body">
                <p>25.000</p>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card text-center pt-3">
              <div class="card-body">
                <p>50.000</p>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card text-center pt-3">
              <div class="card-body">
                <p>100.000</p>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card text-center pt-3">
              <div class="card-body">
                <p>200.000</p>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card text-center pt-3">
              <div class="card-body">
                <p>300.000</p>
              </div>
            </div>
          </div>
        </div>
        <a class="btn btn-orange rounded-pill text-white my-4 px-5" href="#" role="button" data-bs-toggle="modal"
          data-bs-target="#pulsaModal">Tukarkan saldo</a>
        <hr>
        <p>Kami mendukung:</p>
        @for ($i = 1; $i <= 3; $i++) <img src="/assets/img/pulsa_{{ $i }}.png" alt="Pulsa" width="70" class="me-3">
          @endfor
      </div>
    </div>
    {{-- End Tab --}}
  </div>
</section>
{{-- End Survey Change Point --}}

{{-- Modal --}}
<div class="modal fade" id="eWalletModal" tabindex="-1" aria-labelledby="eWalletModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <h4 class="text-success">Berhasil</h4>
        <img src="/assets/img/ic_succeed.svg" alt="Succeed" width="150" class="my-3">
        <p>30 Sep 2021, 10:30</p>
        <p class="text-secondary">Selamat kamu berhasil menukarkan saldo kamu ke
          e-wallet</p>
      </div>
      <hr>
      <div class="row px-4">
        <div class="col-md-1 d-flex">
          <p class="fw-bold">Ke:</p>
        </div>
        <div class="col">
          <img src="/assets/img/e-wallet_1.png" alt="E-Wallet" width="60">
        </div>
        <div class="col-md-4 text-end">
          <h5 class="text-success">Rp100.000</h5>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="pulsaModal" tabindex="-1" aria-labelledby="pulsaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <h4 class="text-success">Berhasil</h4>
        <img src="/assets/img/ic_succeed.svg" alt="Succeed" width="150" class="my-3">
        <p>30 Sep 2021, 10:30</p>
        <p class="text-secondary">Selamat kamu berhasil menukarkan saldo kamu ke
          pulsa</p>
      </div>
      <hr>
      <div class="row px-4">
        <div class="col-md-1 d-flex">
          <p class="fw-bold">Ke:</p>
        </div>
        <div class="col">
          <img src="/assets/img/pulsa_1.png" alt="Pulsa" width="60">
        </div>
        <div class="col-md-4 text-end">
          <h5 class="text-success">Rp100.000</h5>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Modal --}}

@endsection