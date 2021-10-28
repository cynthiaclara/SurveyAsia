@extends('layouts.footer')
@extends('layouts.base')
@extends('researcher.layouts.breadcrumb')
@extends('researcher.layouts.navbar2')

@section('content')

  {{-- Sidebar --}}
  <section class="sidebar-create-survey" id="sidebar-create-survey">
    <div class="row">
      <div class="col-md-1 text-center">
        <a class="link-dark text-decoration-none" data-bs-toggle="collapse"
          href="#collapseStyle" role="button" aria-expanded="false"
          aria-controls="collapseStyle">
          <div class="row border pt-3">
            <div class="col">
              <i class="fas fa-brush fa-fw"></i>
              <p>Style</p>
            </div>
          </div>
        </a>
        <a class="link-dark text-decoration-none" data-bs-toggle="collapse"
          href="#collapseQuestion" role="button" aria-expanded="false"
          aria-controls="collapseQuestion">
          <div class="row border pt-3 sidebar-survey">
            <div class="col">
              <i class="fas fa-database fa-fw"></i>
              <p>Questions Bank</p>
            </div>
          </div>
        </a>
        <a class="link-dark text-decoration-none" data-bs-toggle="collapse"
          href="#collapsePaid" role="button" aria-expanded="false"
          aria-controls="collapsePaid">
          <div class="row border pt-3">
            <div class="col">
              <i class="fas fa-dollar-sign fa-fw"></i>
              <p>Paid</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-2 col-md-3" style="background-color: #f4f4f4;">
        <div class="row">
          <div class="col" style="background-color: #f4f4f4;">
            <div class="collapse show" id="collapseStyle">
              <div class="row border bg-white pt-3 pb-2">
                <div class="col-9">
                  <h6 class="fw-bold">Style</h6>
                </div>
                <div class="col text-end">
                  <i class="fas fa-question-circle fa-fw text-secondary"></i>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 text-center border p-3">
                  <input type="file" name="uploadLogo" id="uploadLogo" hidden>
                  <label for="uploadLogo" style="cursor: pointer;">
                    <h6>Logo</h6>
                    <img src="/assets/img/style_logo.png" alt="Logo">
                  </label>
                </div>
                <div class="col-md-6 text-center border p-3">
                  <a href="#" class="link-dark text-decoration-none">
                    <h6>Layout</h6>
                    <img src="/assets/img/style_layout.png" alt="Layout">
                  </a>
                </div>
                <div class="col-md-6 text-center border p-3">
                  <a href="#" class="link-dark text-decoration-none">
                    <h6>Font</h6>
                    <h1>Aa</h1>
                  </a>
                </div>
                <div class="col-md-6 text-center border p-3">
                  <input type="file" name="uploadBackground" id="uploadBackground"
                    hidden>
                  <label for="uploadBackground" style="cursor: pointer;">
                    <h6>Background</h6>
                    <img src="/assets/img/style_background.png" alt="Logo">
                  </label>
                </div>
                <div class="col-md-6 text-center border p-3">
                  <h6>Color</h6>
                  <div class="d-flex justify-content-center">
                    <input type="color" class="form-control form-control-color"
                      id="exampleColorInput" value="#1a94cd"
                      title="Choose your color">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col" style="background-color: #f4f4f4;">
            <div class="collapse" id="collapseQuestion">
              <div class="row border bg-white pt-3 pb-2">
                <div class="col-9">
                  <h6 class="fw-bold">Question Bank</h6>
                </div>
                <div class="col text-end">
                  <i class="fas fa-question-circle fa-fw text-secondary"></i>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <form>
                    <div class="input-group">
                      <input class="form-control" type="search"
                        placeholder="Search for Questions"
                        aria-label="Cari Judul Survey"
                        aria-describedby="btnNavbarSearch" />
                      <button class="btn btn-light text-light"
                        id="btnNavbarSearch" type="button"><i
                          class="fas fa-search fa-fw text-secondary"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <a href="#" class="link-dark text-decoration-none">
                <div class="row">
                  <div class="col-9">
                    <p>Recommended Questions</p>
                  </div>
                  <div class="col text-end">
                    <i class="fas fa-chevron-right fa-fw"></i>
                  </div>
                  <hr>
                </div>
              </a>
              <a href="#" class="link-dark text-decoration-none">
                <div class="row">
                  <div class="col-9">
                    <p>All Categories</p>
                  </div>
                  <div class="col text-end">
                    <i class="fas fa-chevron-right fa-fw"></i>
                  </div>
                  <hr>
                </div>
              </a>
              <a href="#" class="link-dark text-decoration-none">
                <div class="row">
                  <div class="col-9">
                    <p>Customer Feedback</p>
                  </div>
                  <div class="col text-end">
                    <i class="fas fa-chevron-right fa-fw"></i>
                  </div>
                  <hr>
                </div>
              </a>
              <a href="#" class="link-dark text-decoration-none">
                <div class="row">
                  <div class="col-9">
                    <p>Education</p>
                  </div>
                  <div class="col text-end">
                    <i class="fas fa-chevron-right fa-fw"></i>
                  </div>
                  <hr>
                </div>
              </a>
              <a href="#" class="link-dark text-decoration-none">
                <div class="row">
                  <div class="col-9">
                    <p>Customer Satisfaction</p>
                  </div>
                  <div class="col text-end">
                    <i class="fas fa-chevron-right fa-fw"></i>
                  </div>
                  <hr class="m-0">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col" style="background-color: #f4f4f4;">
            <div class="collapse" id="collapsePaid">
              <div class="row border bg-white pt-3 pb-2">
                <div class="col-9">
                  <h6 class="fw-bold">Paid Feature</h6>
                </div>
                <div class="col text-end">
                  <i class="fas fa-question-circle fa-fw text-secondary"></i>
                </div>
              </div>
              <div class="text-center">
                <p class="mt-3">Keranjang</p>
                <hr>
                <img src="/assets/img/ic_empty_cart.svg" alt="Empty Cart">
                <p class="text-muted mt-3">Anda belum membeli fitur berbayar</p>
                <hr>
                <p>Upgrade akunmu menjadi paket membership</p>
                <img src="/assets/img/upgrade_account.png" alt="Upgrade Account">
                <p class="mt-3">Anda menggunakan paket BASIC, tetapi
                  Anda dapat mencoba fitur berbayar saat membuat
                  survei.</p>
                <ul class="text-start">
                  <li>Fitur berbayar yang Anda tambahkan tercantum di sini</li>
                  <li>Tingkatkan paket Anda (atau klik EDIT untuk menghapus fitur
                    berbayar) sebelum</li>
                </ul>
                <a class="btn btn-orange text-white text-center mb-3"
                  href="/researcher/pricing" role="button" data-bs-toggle="modal"
                  data-bs-target="#pricingModal">Lihat
                  Member</a>
                {{-- Modal --}}
                <div class="modal fade" id="pricingModal" tabindex="-1"
                  aria-labelledby="pricingModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="btn-close"
                          data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <section class="pricing" id="pricing">
                          <div class="row justify-content-center text-center">
                            <div class="col">
                              <h2 class="fw-bold">Pilihan Harga untuk Anda
                              </h2>
                              <div class="row justify-content-center">
                                <div class="col-md-8">
                                  <p class="text-secondary">Setting up an
                                    investment structure, raiding the neccessary
                                    capital,
                                    and
                                    maintaing
                                    an excellent investor
                                    relation throught the investment life requires
                                    well-established processes
                                  </p>
                                </div>
                              </div>
                              {{-- Tab --}}
                              <ul class="nav justify-content-center mt-4"
                                id="myTab" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link link-pricing link-secondary"
                                    aria-current="page" href="#"
                                    id="pay-per-survey-tab" data-bs-toggle="tab"
                                    data-bs-target="#pay-per-survey" type="button"
                                    role="tab" aria-controls="pay-per-survey"
                                    aria-selected="true">
                                    <h4 class="fw-bold mb-5">Pay Per Survey
                                    </h4>
                                  </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link link-pricing link-secondary link-orange text-decoration-underline"
                                    aria-current="page" href="#" id="personal-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#personal" type="button"
                                    role="tab" aria-controls="personal"
                                    aria-selected="true">
                                    <h4 class="fw-bold mb-5">Personal</h4>
                                  </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link link-pricing link-secondary"
                                    aria-current="page" href="#" id="business-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#business" type="button"
                                    role="tab" aria-controls="business"
                                    aria-selected="true">
                                    <h4 class="fw-bold mb-5">Business</h4>
                                  </a>
                                </li>
                              </ul>
                              {{-- End Tab --}}
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="pay-per-survey"
                                  role="tabpanel"
                                  aria-labelledby="pay-per-survey-tab">
                                  <div class="container">
                                    <div
                                      class="row justify-content-center business-price mb-5"
                                      id="business-price">
                                      <div class="col-md-4">
                                        <div class="rounded p-3">
                                          <h5 class="text-orange">Custom</h5>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit, amet consectetur
                                            adipisicing
                                            elit.
                                            Autem quo
                                            sint,
                                            sed repellat eius quam?
                                          </p>
                                          <h5 class="text-orange">Contact Us
                                          </h5>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit amet consectetur adipisicing
                                            elit.
                                            Quis,
                                            labore.</p>
                                          <a class="btn btn-orange text-light w-50 mb-3"
                                            href="/contact" role="button">Contact
                                            Us</a>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit amet consectetur adipisicing
                                            elit.
                                            Quis,
                                            labore.
                                          </p>
                                          @for ($i = 0; $i < 5; $i++)
                                            <p>&#10004; Lorem ipsum dolor sit amet
                                            </p>
                                          @endfor
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane fade show active"
                                  id="personal" role="tabpanel"
                                  aria-labelledby="personal-tab">
                                  <div class="container">
                                    <div class="row personal-price mb-5"
                                      id="personal-price">
                                      <div class="col-md-4">
                                        <div class="rounded p-3">
                                          <h5 class="text-orange">Basic</h5>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit, amet consectetur
                                            adipisicing
                                            elit.
                                            Autem quo
                                            sint,
                                            sed repellat eius quam?
                                          </p>
                                          <h5 class="text-orange">
                                            Rp249.000/bulan</h5>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit amet consectetur adipisicing
                                            elit.
                                            Quis,
                                            labore.
                                          </p>
                                          <a class="btn btn-orange text-light w-50 mb-3"
                                            href="/researcher/payment"
                                            role="button">Beli</a>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit amet consectetur adipisicing
                                            elit.
                                            Quis,
                                            labore.
                                          </p>
                                          @for ($i = 0; $i < 5; $i++)
                                            <p>&#10004; Lorem ipsum dolor sit amet
                                            </p>
                                          @endfor
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div
                                          class="bg-light-default rounded p-3">
                                          <h5 class="text-default">Essential
                                            Annual</h5>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit, amet consectetur
                                            adipisicing
                                            elit.
                                            Autem quo
                                            sint,
                                            sed repellat eius quam?
                                          </p>
                                          <h5 class="text-default">
                                            Rp199.000/bulan</h5>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit amet consectetur adipisicing
                                            elit.
                                            Quis,
                                            labore.
                                          </p>
                                          <a class="btn btn-default text-light w-50 mb-3"
                                            href="/researcher/payment"
                                            role="button">Beli</a>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit amet consectetur adipisicing
                                            elit.
                                            Quis,
                                            labore.
                                          </p>
                                          @for ($i = 0; $i < 5; $i++)
                                            <p>&#10004; Lorem ipsum dolor sit amet
                                            </p>
                                          @endfor
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="rounded p-3">
                                          <h5 class="text-orange">Plus Annual
                                          </h5>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit, amet consectetur
                                            adipisicing
                                            elit.
                                            Autem quo
                                            sint,
                                            sed repellat eius quam?
                                          </p>
                                          <h5 class="text-orange">
                                            Rp449.000/bulan</h5>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit amet consectetur adipisicing
                                            elit.
                                            Quis,
                                            labore.
                                          </p>
                                          <a class="btn btn-orange text-light w-50 mb-3"
                                            href="/researcher/payment"
                                            role="button">Beli</a>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit amet consectetur adipisicing
                                            elit.
                                            Quis,
                                            labore.
                                          </p>
                                          @for ($i = 0; $i < 5; $i++)
                                            <p>&#10004; Lorem ipsum dolor sit amet
                                            </p>
                                          @endfor
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="business"
                                  role="tabpanel" aria-labelledby="business-tab">
                                  <div class="container">
                                    <div class="row business-price mb-5"
                                      id="business-price">
                                      <div class="col-md-4">
                                        <div class="rounded p-3">
                                          <h5 class="text-orange">Advantage
                                          </h5>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit, amet consectetur
                                            adipisicing
                                            elit.
                                            Autem quo
                                            sint,
                                            sed repellat eius quam?
                                          </p>
                                          <h5 class="text-orange">
                                            Rp1.099.000/user</h5>
                                          <p class="text-secondary">Minimal 3
                                            User</p>
                                          <a class="btn btn-orange text-light w-50 mb-3"
                                            href="/researcher/payment"
                                            role="button">Beli</a>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit amet consectetur adipisicing
                                            elit.
                                            Quis,
                                            labore.
                                          </p>
                                          @for ($i = 0; $i < 5; $i++)
                                            <p>&#10004; Lorem ipsum dolor sit amet
                                            </p>
                                          @endfor
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div
                                          class="bg-light-default rounded p-3">
                                          <h5 class="text-default">Enterprise
                                          </h5>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit, amet consectetur
                                            adipisicing
                                            elit.
                                            Autem quo
                                            sint,
                                            sed repellat eius quam?
                                          </p>
                                          <h5 class="text-default">
                                            Rp1.999.000/user</h5>
                                          <p class="text-secondary">Minimal 5
                                            User</p>
                                          <a class="btn btn-default text-light w-50 mb-3"
                                            href="/researcher/payment"
                                            role="button">Beli</a>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit amet consectetur adipisicing
                                            elit.
                                            Quis,
                                            labore.
                                          </p>
                                          @for ($i = 0; $i < 5; $i++)
                                            <p>&#10004; Lorem ipsum dolor sit amet
                                            </p>
                                          @endfor
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="rounded p-3">
                                          <h5 class="text-orange">Corporate
                                          </h5>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit, amet consectetur
                                            adipisicing
                                            elit.
                                            Autem quo
                                            sint,
                                            sed repellat eius quam?
                                          </p>
                                          <h5 class="text-orange">Contact Us
                                          </h5>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit amet consectetur adipisicing
                                            elit.
                                            Quis,
                                            labore.
                                          </p>
                                          <a class="btn btn-orange text-light w-50 mb-3"
                                            href="/contact" role="button">Contact
                                            Us</a>
                                          <p class="text-secondary">Lorem ipsum
                                            dolor sit amet consectetur adipisicing
                                            elit.
                                            Quis,
                                            labore.
                                          </p>
                                          @for ($i = 0; $i < 5; $i++)
                                            <p>&#10004; Lorem ipsum dolor sit amet
                                            </p>
                                          @endfor
                                        </div>
                                      </div>
                                    </div>
                                  </div>
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
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-9 col-md-8 py-3">
        {{-- Question Form --}}
        <section class="question-form mb-5 px-5" id="question-form">
          {{-- Tab --}}
          <div class="row justify-content-between">
            <div class="col">
              <ul class="nav" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link link-question link-secondary link-default text-decoration-underline"
                    aria-current="page" href="#" id="question-tab"
                    data-bs-toggle="tab" data-bs-target="#question" type="button"
                    role="tab" aria-controls="question" aria-selected="true">
                    Pertanyaan
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link link-question link-secondary"
                    aria-current="page" href="#" id="additional-tab"
                    data-bs-toggle="tab" data-bs-target="#additional"
                    type="button" role="tab" aria-controls="additional"
                    aria-selected="false">
                    Tambahan
                  </a>
                </li>
              </ul>
            </div>
            <div class="col text-end me-4">
              <a href="#" class="link-secondary text-decoration-none"><i
                  class="far fa-eye fa-fw"></i> Preview</a>
            </div>
          </div>
          {{-- End Tab --}}
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="question" role="tabpanel"
              aria-labelledby="question-tab">
              <div class="container" id="question-container">
                <div class="row justify-content-center primary-question mb-5"
                  id="primary-question">
                  <div class="col">
                    <form action="#">
                      @csrf
                      <div class="form-floating my-3">
                        <input type="text" class="form-control"
                          id="floatingInput" placeholder="Judul Formulir"
                          name="survey_title">
                        <label for="floatingInput">Judul Formulir</label>
                      </div>
                      <div class="mb-3">
                        <div class="border rounded p-3">
                          <label for="question-desc"
                            class="form-label">Deskripsi</label>
                          <textarea class="form-control" id="question-desc"
                            rows="3" placeholder="Tulis Deskripsi.."
                            name="survey_desc"></textarea>
                        </div>
                      </div>
                      <div class="border rounded mt-3 p-3" id="survey-question">
                        <div class="col-md-12">
                          <div class="row">
                            <p>Pertanyaan anda</p>
                            <div class="col-9">
                              <div class="form-floating">
                                <input type="text" class="form-control"
                                  id="floatingInput"
                                  placeholder="Masukkan Pertanyaan">
                                <label for="floatingInput">Masukkan
                                  Pertanyaan</label>
                              </div>
                            </div>
                            <div class="col-3">
                              <select class="form-select"
                                aria-label="Default select example">
                                <option value="1">Pilihan Ganda</option>
                                <option value="2">Checkbox</option>
                                <option value="3">Dropdown</option>
                              </select>
                            </div>
                          </div>
                          <div class="answer-div" id="answer-div">
                            <div class="row survey-answer mt-2"
                              id="survey-answer">
                              <div class="col-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio"
                                    name="flexRadioDefault" id="myAnswer">
                                  <input type="text" class="form-control"
                                    id="myAnswer" aria-describedby="emailHelp"
                                    placeholder="Masukkan Jawaban">
                                </div>
                              </div>
                              <div class="col-2 text-center">
                                <button type="button" id="btn-remove-answer"
                                  class="btn btn-link link-secondary text-decoration-none"
                                  onclick="removeAnswer()"><i
                                    class="fas fa-minus-circle fa-fw"></i>
                                </button>
                                <button type="button" id="btn-add-answer"
                                  class="btn btn-link link-secondary text-decoration-none"
                                  onclick="addAnswer()"><i
                                    class="fas fa-plus-circle fa-fw"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col text-end">
                              <button type="button" id="btn-remove-question"
                                class="btn btn-link link-secondary text-decoration-none"
                                onclick="removeQuestion()"><i
                                  class="fas fa-trash-alt fa-fw"></i> Hapus
                              </button>
                              <button type="button" id="btn-add-question"
                                class="btn btn-link link-secondary text-decoration-none"
                                onclick="addQuestion()"><i
                                  class="fas fa-file-medical fa-fw"></i> Tambah
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="additional" role="tabpanel"
              aria-labelledby="additional-tab">
              <div class="container" id="additional-question-container">
                <div class="row justify-content-center additional-question mb-5"
                  id="additional-question">
                  <div class="col">
                    <form action="#">
                      @csrf
                      <div class="border rounded mt-3 p-3"
                        id="survey-additional-question">
                        <div class="col-md-12">
                          <div class="row">
                            <p>Pertanyaan anda</p>
                            <div class="col-9">
                              <div class="form-floating">
                                <input type="text" class="form-control"
                                  id="floatingInput"
                                  placeholder="Masukkan Pertanyaan">
                                <label for="floatingInput">Masukkan
                                  Pertanyaan</label>
                              </div>
                            </div>
                            <div class="col-3">
                              <select class="form-select"
                                aria-label="Default select example">
                                <option value="1">Pilihan Ganda</option>
                                <option value="2">Checkbox</option>
                                <option value="3">Dropdown</option>
                              </select>
                            </div>
                          </div>
                          <div class="additional-answer-div"
                            id="additional-answer-div">
                            <div class="row survey-additional-answer mt-2"
                              id="survey-additional-answer">
                              <div class="col-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio"
                                    name="flexRadioDefault" id="myAnswer">
                                  <input type="text" class="form-control"
                                    id="myAnswer" aria-describedby="emailHelp"
                                    placeholder="Masukkan Jawaban">
                                </div>
                              </div>
                              <div class="col-2 text-center">
                                <button type="button"
                                  id="btn-remove-additional-answer"
                                  class="btn btn-link link-secondary text-decoration-none"
                                  onclick="removeAdditionalAnswer()"><i
                                    class="fas fa-minus-circle fa-fw"></i>
                                </button>
                                <button type="button"
                                  id="btn-add-additional-answer"
                                  class="btn btn-link link-secondary text-decoration-none"
                                  onclick="addAdditionalAnswer()"><i
                                    class="fas fa-plus-circle fa-fw"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col text-end">
                              <button type="button"
                                id="btn-remove-additional-question"
                                class="btn btn-link link-secondary text-decoration-none"
                                onclick="removeAdditionalQuestion()"><i
                                  class="fas fa-trash-alt fa-fw"></i> Hapus
                              </button>
                              <button type="button"
                                id="btn-add-additional-question"
                                class="btn btn-link link-secondary text-decoration-none"
                                onclick="addAdditionalQuestion()"><i
                                  class="fas fa-file-medical fa-fw"></i> Tambah
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col text-end mt-3 me-4">
            <a class="btn btn-outline-secondary me-3" href="#">Cancel</a>
            <button class="btn btn-default text-white px-4"
              type="submit">Save</button>
          </div>

          </form>
        </section>
        {{-- End Question Form --}}
      </div>
    </div>
  </section>
  {{-- Sidebar --}}



@endsection
