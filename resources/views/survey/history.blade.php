@extends('layouts.footer')
@extends('layouts.base')
@extends('survey.layouts.header')
@extends('respondent.layouts.navbar')

@section('content')

{{-- Survey History --}}
<section class="history-survey pb-5" id="history-survey">
  <div class="container">
    {{-- Side Tab --}}
    <div class="d-flex align-items-start mt-5">
      <div class="nav flex-column nav-pills me-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active px-5" id="v-pills-survey-tab" data-bs-toggle="pill"
          data-bs-target="#v-pills-survey" type="button" role="tab" aria-controls="v-pills-survey"
          aria-selected="true">Survey</button>
        <button class="nav-link" id="v-pills-change-tab" data-bs-toggle="pill" data-bs-target="#v-pills-change"
          type="button" role="tab" aria-controls="v-pills-change" aria-selected="false">Tukar
          Poin</button>
      </div>
      <div class="tab-content w-100" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-survey" role="tabpanel" aria-labelledby="v-pills-survey-tab">
          <h4 class="fw-bold">Riwayat</h4>
          {{-- Tab --}}
          <ul class="nav nav-pills mt-5 mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-survey-tab" data-bs-toggle="pill" data-bs-target="#pills-survey"
                type="button" role="tab" aria-controls="pills-survey" aria-selected="true">Survey</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-exchange-tab" data-bs-toggle="pill" data-bs-target="#pills-exchange"
                type="button" role="tab" aria-controls="pills-exchange" aria-selected="false">Penukaran</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-survey" role="tabpanel" aria-labelledby="pills-survey-tab">
              <div class="card mt-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1 align-self-center">
                      <img src="/assets/img/ic_paper.svg" alt="Paper">
                    </div>
                    <div class="col d-flex align-self-center">
                      <p>Kamu telah menyelesaikan studi</p>
                      <p class="text-secondary ms-1">Survey Kepuasan Pengguna
                      </p>
                    </div>
                    <div class="col-md-2">
                      <p>21-10-2020</p>
                      <button type="button" class="btn btn-orange text-white" disabled>Diproses</button>
                    </div>
                  </div>
                </div>
              </div>
              @for ($i = 0; $i < 9; $i++) <a href="#" data-bs-toggle="modal" data-bs-target="#approvedModal"
                role="button" class="link-dark text-decoration-none">
                <div class="card mt-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-1 align-self-center">
                        <img src="/assets/img/ic_paper.svg" alt="Paper">
                      </div>
                      <div class="col d-flex align-self-center">
                        <p>Kamu telah menyelesaikan studi</p>
                        <p class="text-secondary ms-1">Survey Kepuasan
                          Pengguna</p>
                      </div>
                      <div class="col-md-2">
                        <p>21-10-2020</p>
                        <button type="button" class="btn btn-success" disabled>Disetujui</button>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
                @endfor
            </div>
            <div class="tab-pane fade" id="pills-exchange" role="tabpanel" aria-labelledby="pills-exchange-tab">
              @for ($i = 0; $i < 9; $i++) <a href="#" data-bs-toggle="modal" data-bs-target="#approvedModal"
                role="button" class="link-dark text-decoration-none">
                <div class="card mt-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-1 align-self-center">
                        <img src="/assets/img/ic_paper.svg" alt="Paper">
                      </div>
                      <div class="col d-flex align-self-center">
                        <p>Kamu telah menyelesaikan studi</p>
                        <p class="text-secondary ms-1">Survey Kepuasan
                          Pengguna</p>
                      </div>
                      <div class="col-md-2">
                        <p>21-10-2020</p>
                        <button type="button" class="btn btn-success" disabled>Disetujui</button>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
                @endfor
            </div>
          </div>
          {{-- End Tab --}}
        </div>
        <div class="tab-pane fade" id="v-pills-change" role="tabpanel" aria-labelledby="v-pills-change-tab">
          <h4 class="fw-bold">Tukar Poin</h4>
          <h5 class="text-muted">Catatan:</h5>
          <p class="text-muted">Pilihlah dan tukarkan poin Anda dnegan
            hadiah, silakan pilih dari item di
            bawah
            ini
            dengan memperhatikan
            persyaratan.</p>
          <div class="row">
            @for ($j = 1; $j <= 3; $j++) <div class="col-md-6">
              <a href="/survey/history/change-point" class="link-dark text-decoration-none">
                <div class="card mt-4 p-4" style="height: 320px;">
                  <div class="card-body text-center">
                    <h4 class="fw-bold">Pulsa</h4>
                    <img src="/assets/img/pulsa_{{ $j }}.png" alt="Pulsa" class="mt-5">
                  </div>
                </div>
              </a>
          </div>
          <div class="col-md-6">
            <a href="/survey/history/change-point" class="link-dark text-decoration-none">
              <div class="card mt-4 p-4" style="height: 320px;">
                <div class="card-body text-center">
                  <h4 class="fw-bold">E-Wallet</h4>
                  <img src="/assets/img/e-wallet_{{ $j }}.png" alt="Pulsa" class="mt-5">
                </div>
              </div>
            </a>
          </div>
          @endfor
        </div>
      </div>
    </div>
  </div>
  {{-- End Side Tab --}}
  </div>

  {{-- Modal --}}
  <div class="modal fade" id="approvedModal" tabindex="-1" aria-labelledby="approvedModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <h5 class="fw-bold">Detail Riwayat</h5>
          <p class="fw-bold shadow-sm rounded p-2 my-3">Survey Kepuasan
            Pelanggan</p>
          <div class="row">
            <div class="col">
              <p class="text-muted m-0 p-0">Reward</p>
              <h6>Rp1.600</h6>
            </div>
            <div class="col">
              <p class="text-muted m-0 p-0">Tanggal</p>
              <h6>20-10-2020</h6>
            </div>
          </div>
          <hr>
          <p class="text-muted m-0 p-0">Kriteria Penilaian</p>
          <span class="d-flex">
            <img src="/assets/img/ic_shield_done.svg" alt="Done" width="16">
            <p class="m-0 p-0">Studi selesai dan disetujui oleh tim riset
              Surveyasia</p>
          </span>
          <div class="row justify-content-center">
            <div class="col-md-8">
              <button type="button" class="btn btn-outline-default rounded-pill w-100 my-3"
                data-bs-dismiss="modal">Tutup
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal --}}
</section>
{{-- End Survey History --}}

@endsection