@extends('layouts.footer')
@extends('researcher.layouts.base')
@extends('researcher.layouts.navbar')

@section('content')

<div class="container-fluid p-5">
  <div class="row">

    @if (session('verified'))
    <div class="alert alert-success col-md-4 col-md-offset-4" role="alert">
      <p>Verifikasi Berhasil<button type="button" class="btn-close justify-content-end" data-bs-dismiss="alert"
          aria-label="Close"></button></p>
    </div>
    @endif
    <div class="col">
      {{-- Modal Button --}}
      <button type="button" class="btn btn-orange text-light" data-bs-toggle="modal" data-bs-target="#addSurveyModal"><i
          class="fas fa-plus fa-fw"></i> Survey
        Baru
      </button>

      <!-- Modal Create Survey -->
      <div class="modal fade" id="addSurveyModal" tabindex="-1" aria-labelledby="addSurveyModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addSurveyModalLabel">Survey Baru
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('researcher.surveys.store') }}" method="POST">
              @csrf
              <div class="modal-body">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col">
                      <div class="form-group my-3">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="" required>
                      </div>
                      <div class="form-group my-3">
                        <label for="desc">Deskripsi</label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder=""
                          required></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-default" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-default text-white" type="submit">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <form>
        <div class="input-group">
          <input class="form-control" type="search" placeholder="Cari Judul Survey" aria-label="Cari Judul Survey"
            aria-describedby="btnNavbarSearch" />
          <button class="btn btn-default text-light" id="btnNavbarSearch" type="button"><i
              class="fas fa-search"></i></button>
        </div>
      </form>
    </div>
  </div>
  {{-- Survey List --}}
  @if (count($surveys) == 0)
  <div class="row mt-4 py-3 justify-content-center">
    <div class="col-4">
      <h6>No survey created</h5>
    </div>
  </div>
  @else
  @foreach ($surveys as $survey)
  <div class="row mt-4 py-3 rounded shadow">
    <div class="col">
      <img src="/assets/img/recommendation_4.png" alt="Survey 1">
    </div>
    <div class="col-md-4 d-flex align-items-center">
      <div class="row">
        <div class="col">
          <h6 class="fw-bold">{{ $survey->title }}</h6>
          <p class="fw-light">
            {{ $survey->created_at->diffForHumans() }} </p>
        </div>
      </div>
    </div>
    <div class="col d-flex align-items-center">
      <div class="row text-center">
        <div class="col">
          <p class="text-default">Status</p>
          <h6 class="text-success">Active</h6>
        </div>
      </div>
    </div>
    <div class="col d-flex align-items-center">
      <div class="row text-center">
        <div class="col">
          <p class="text-default">Design</p>
          <a href="/researcher/create-survey">
            <img src="/assets/img/ic_edit.svg" alt="Edit Design" class="img-fluid" width="24">
          </a>
        </div>
      </div>
    </div>
    <div class="col d-flex align-items-center">
      <div class="row text-center">
        <div class="col">
          <p class="text-default">Report</p>
          <a href="/researcher/analytics-result">
            <img src="/assets/img/ic_report.svg" alt="Report" class="img-fluid" width="24">
          </a>
        </div>
      </div>
    </div>
    <div class="col d-flex align-items-center">
      <div class="row text-center">
        <div class="col">
          <p class="text-default">Share</p>
          <a href="/researcher/status-survey">
            <img src="/assets/img/ic_share.svg" alt="Share" class="img-fluid" width="24">
          </a>
        </div>
      </div>
    </div>
    <div class="col text-center d-flex align-items-center">
      <a class="dropdown-item" href="#"><i class="fas fa-chevron-down fa-fw"></i></a>
    </div>
  </div>
  @endforeach
  @endif

</div>

{{-- Modal Pricing --}}
<div class="modal fade" id="pricingModal" tabindex="-1" aria-labelledby="pricingModalLabel" aria-hidden="true"
  role="dialog">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <section class="pricing" id="pricing">
          <div class="row justify-content-center text-center">
            <div class="col">
              <h2 class="fw-bold pt-5">Pilihan Harga untuk Anda</h2>
              <div class="row justify-content-center">
                <div class="col-md-5">
                  <p class="text-secondary">Setting up an investment structure, raiding the neccessary capital,
                    and
                    maintaing
                    an excellent investor
                    relation throught the investment life requires well-established processes
                  </p>
                </div>
              </div>
              {{-- Tab --}}
              <ul class="nav justify-content-center mt-4" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link link-pricing link-secondary" aria-current="page" href="#" id="pay-per-survey-tab"
                    data-bs-toggle="tab" data-bs-target="#pay-per-survey" type="button" role="tab"
                    aria-controls="pay-per-survey" aria-selected="true">
                    <h4 class="fw-bold mb-5">Pay Per Survey</h4>
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link link-pricing link-secondary link-orange text-decoration-underline"
                    aria-current="page" href="#" id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal"
                    type="button" role="tab" aria-controls="personal" aria-selected="true">
                    <h4 class="fw-bold mb-5">Personal</h4>
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link link-pricing link-secondary" aria-current="page" href="#" id="business-tab"
                    data-bs-toggle="tab" data-bs-target="#business" type="button" role="tab" aria-controls="business"
                    aria-selected="true">
                    <h4 class="fw-bold mb-5">Business</h4>
                  </a>
                </li>
              </ul>
              {{-- End Tab --}}
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="pay-per-survey" role="tabpanel" aria-labelledby="pay-per-survey-tab">
                  <div class="container">
                    <div class="row justify-content-center business-price mb-5" id="business-price">
                      <div class="col-md-4">
                        <div class="bg-light-default rounded p-3">
                          <h4 class="text-default fw-bold">Custom</h4>
                          <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Autem quo
                            sint,
                            sed repellat eius quam?
                          </p>
                          <h4 class="text-default">Start from Rp 0</h4>
                          <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quis,
                            labore.
                          </p>
                          <a class="btn btn-default text-light w-50 mb-3" href="/contact" role="button">Contact Us</a>
                          <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quis,
                            labore.
                          </p>
                          @for ($i = 0; $i < 5; $i++) <p>&#10004; Lorem ipsum dolor sit amet</p>
                            @endfor
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                  <div class="container">
                    <div class="row personal-price mb-5" id="personal-price">
                      <div class="col-md-4">
                        <div class="rounded p-3">
                          <h4 class="text-orange fw-bold">Basic</h4>
                          <p class="text-secondary">All the integral features to get started with data
                            collection
                          </p>
                          <h4 class="text-orange">Rp249.000</h4>
                          <p class="text-secondary">per Bulan</p>
                          <a class="btn btn-orange text-light w-50 my-5" href="/researcher/payment"
                            role="button">Beli</a>
                          <p>&#10004; Jumlah survei unlimited</p>
                          <p>&#10004; Pertanyaan unlimited</p>
                          <p>&#10004; 1.000 Responden</p>
                          <p>&#10004; Melacak tanggapan email</p>
                          <p>&#10004; Survey berulang</p>
                          <p>&#10004; Terima pembayaran</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="bg-light-default rounded p-3">
                          <h4 class="text-default fw-bold">Essential Annual</h4>
                          <p class="text-secondary">For early-stage start-ups. Your first step towards,
                            building a brand.
                          </p>
                          <h4 class="text-default">Rp199.000</h4>
                          <p class="text-secondary">per Bulan</p>
                          <p class="text-secondary">Rp2.388.000 per Tahun</p>
                          <a class="btn btn-default text-light w-50 mb-3" href="/researcher/payment"
                            role="button">Beli</a>
                          <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quis,
                            labore.
                          </p>
                          <p>&#10004; Jumlah survei unlimited</p>
                          <p>&#10004; Pertanyaan unlimited</p>
                          <p>&#10004; 2.500 Responden</p>
                          <p>&#10004; Fitur kolaborasi</p>
                          <p>&#10004; Pengatur waktu tidak aktif</p>
                          <p>&#10004; Terima pembayaran</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="rounded p-3">
                          <h4 class="text-orange fw-bold">Plus Annual</h4>
                          <p class="text-secondary">Ideal for professionals. Meet all your survey requirements
                            at once.
                          </p>
                          <h4 class="text-orange">Rp449.000</h4>
                          <p class="text-secondary">per Bulan</p>
                          <p class="text-secondary">Rp5.388.000 per Tahun</p>
                          <a class="btn btn-orange text-light w-50 mb-3" href="/researcher/payment"
                            role="button">Beli</a>
                          <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quis,
                            labore.
                          </p>
                          <p>&#10004; Jumlah survei unlimited</p>
                          <p>&#10004; Pertanyaan unlimited</p>
                          <p>&#10004; 5.000 Responden</p>
                          <p>&#10004; Fitur kolaborasi</p>
                          <p>&#10004; Pengatur waktu tidak aktif</p>
                          <p>&#10004; Terima pembayaran</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <section class="comparison-price" id="comparison-price">
                    <div class="container">
                      <div class="row py-5 justify-content-center">
                        <h2 class="text-default text-center fw-bold mb-5">Komparasi Harga</h2>
                        <table class="table table-borderless text-center">
                          <thead>
                            <tr>
                              <th scope="col">
                                <h5 class="text-default fw-bold mb-4">Features</h5>
                              </th>
                              <th scope="col">
                                <h5 class="text-default fw-bold mb-4">Basic</h5>
                              </th>
                              <th scope="col">
                                <h5 class="text-default fw-bold mb-4">Essential Annual</h5>
                              </th>
                              <th scope="col">
                                <h5 class="text-default fw-bold mb-4">Plus Annual</h5>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td scope="row">
                                @for ($i = 0; $i < 10; $i++) <p class="text-default">Lorem ipsum
                                  dolor sit amet
                                  </p>
                                  @endfor
                              </td>
                              <td>
                                @for ($i = 0; $i < 5; $i++) <p class="text-default">&#10004;</p>
                                  @endfor
                              </td>
                              <td>
                                @for ($i = 0; $i < 8; $i++) <p class="text-default">&#10004;</p>
                                  @endfor
                              </td>
                              <td>
                                @for ($i = 0; $i < 10; $i++) <p class="text-default">&#10004;</p>
                                  @endfor
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </section>
                </div>
                <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
                  <div class="container">
                    <div class="row business-price mb-5" id="business-price">
                      <div class="col-md-4">
                        <div class="rounded p-3">
                          <h4 class="text-orange fw-bold">Advantage</h4>
                          <p class="text-secondary">Perfect for small teams. Premium features to grow your
                            business seamlessly.
                          </p>
                          <h4 class="text-orange">Rp1.099.000</h4>
                          <p class="text-secondary">per Bulan</p>
                          <p class="text-secondary">Minimal 3 User</p>
                          <a class="btn btn-orange text-light w-50 mb-3" href="/researcher/payment"
                            role="button">Beli</a>
                          <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quis,
                            labore.
                          </p>
                          <p>&#10004; Kolaborasi tim</p>
                          <p>&#10004; 15.000 Responden</p>
                          <p>&#10004; Email yang dipercepat</p>
                          <p>&#10004; Survey dilindungi kata sandi</p>
                          <p>&#10004; Aktifkan pemblokiran IP</p>
                          <p>&#10004; Validasi jawaban</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="bg-light-default rounded p-3">
                          <h4 class="text-default fw-bold">Enterprise</h4>
                          <p class="text-secondary">All-rounder solution for your enterprise. Elevate your
                            experience management.
                          </p>
                          <h4 class="text-default">Rp1.999.000</h4>
                          <p class="text-secondary">per Bulan</p>
                          <p class="text-secondary">Minimal 5 User</p>
                          <a class="btn btn-default text-light w-50 mb-3" href="/researcher/payment"
                            role="button">Beli</a>
                          <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quis,
                            labore.
                          </p>
                          <p>&#10004; Kolaborasi tim</p>
                          <p>&#10004; 30.000 Responden</p>
                          <p>&#10004; Email yang diprioritaskan</p>
                          <p>&#10004; Halaman acak</p>
                          <p>&#10004; Kuota tanggapan</p>
                          <p>&#10004; Visualisasi data peta</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="rounded p-3">
                          <h4 class="text-orange fw-bold">Corporate</h4>
                          <p class="text-secondary">Opted by businesses looking for a custom solution.</p>
                          <h4 class="text-orange">Contact Us</h4>
                          <p class="text-secondary">Fitur yang andal untuk organisasi Anda.</p>
                          <a class="btn btn-orange text-light w-50 my-5" href="/contact" role="button">Contact
                            Us</a>
                          <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quis,
                            labore.
                          </p>
                          <p>&#10004; Kolaborasi tim</p>
                          <p>&#10004; Custom</p>
                          <p>&#10004; Dukungan telepon</p>
                          <p>&#10004; Tren data</p>
                          <p>&#10004; Lihat alamat IP responden</p>
                          <p>&#10004; Email konfirmasi kepada Responden</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <section class="comparison-price" id="comparison-price">
                    <div class="container">
                      <div class="row py-5 justify-content-center">
                        <h2 class="text-default text-center fw-bold mb-5">Komparasi Harga</h2>
                        <table class="table table-borderless text-center">
                          <thead>
                            <tr>
                              <th scope="col">
                                <h5 class="text-default fw-bold mb-4">Features</h5>
                              </th>
                              <th scope="col">
                                <h5 class="text-default fw-bold mb-4">Advantage</h5>
                              </th>
                              <th scope="col">
                                <h5 class="text-default fw-bold mb-4">Enterprise</h5>
                              </th>
                              <th scope="col">
                                <h5 class="text-default fw-bold mb-4">Corporate</h5>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td scope="row">
                                @for ($i = 0; $i < 10; $i++) <p class="text-default">Lorem ipsum
                                  dolor sit amet
                                  </p>
                                  @endfor
                              </td>
                              <td>
                                @for ($i = 0; $i < 5; $i++) <p class="text-default">&#10004;</p>
                                  @endfor
                              </td>
                              <td>
                                @for ($i = 0; $i < 8; $i++) <p class="text-default">&#10004;</p>
                                  @endfor
                              </td>
                              <td>
                                @for ($i = 0; $i < 10; $i++) <p class="text-default">&#10004;</p>
                                  @endfor
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
{{-- End Modal --}}

@endsection