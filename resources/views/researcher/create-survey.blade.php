@extends('layouts.footer')
@extends('layouts.base')
@extends('researcher.layouts.navbar2')

@section('content')

{{-- Breadcrumb --}}
<section class="breadcrumb-contact mt-3 ms-5" id="breadcrumb-contact">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/researcher/dashboard" class="link-orange text-decoration-none"><i
                        class="fas fa-home fa-fw"></i> Beranda</a></li>
            <li class="breadcrumb-item"><a href="/researcher/create-survey" class="link-default">Survey</a>
            </li>
            <li class="breadcrumb-item"><a href="#" class="link-secondary text-decoration-none">Diagram</a>
            </li>
            <li class="breadcrumb-item"><a href="#" class="link-secondary text-decoration-none">Respondent</a>
            </li>
            <li class="breadcrumb-item"><a href="#" class="link-secondary text-decoration-none">Analytics Result</a>
            </li>
        </ol>
    </nav>
</section>
{{-- End Breadcrumb --}}

<hr class="mb-0">

{{-- Sidebar --}}
<section class="sidebar-create-survey" id="sidebar-create-survey">
    <div class="row">
        <div class="col-md-1 text-center">
            <a href="#" class="link-dark text-decoration-none">
                <div class="row border pt-3">
                    <div class="col">
                        <i class="fas fa-brush fa-fw"></i>
                        <p>Style</p>
                    </div>
                </div>
            </a>
            <a href="#" class="link-dark text-decoration-none">
                <div class="row border pt-3">
                    <div class="col">
                        <i class="fas fa-project-diagram fa-fw"></i>
                        <p>Logic</p>
                    </div>
                </div>
            </a>
            <a href="#" class="link-dark text-decoration-none">
                <div class="row border pt-3 sidebar-survey sidebar-active">
                    <div class="col">
                        <i class="fas fa-database fa-fw"></i>
                        <p>Questions Bank</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-2" style="background-color: #f4f4f4;">
            <div class="row border bg-white pt-3 pb-2">
                <div class="col-md-10">
                    <h6 class="fw-bold">Question Bank</h6>
                </div>
                <div class="col">
                    <i class="fas fa-question-circle fa-fw text-secondary"></i>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <form>
                        <div class="input-group">
                            <input class="form-control" type="search" placeholder="Search for Questions"
                                aria-label="Cari Judul Survey" aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-light text-light" id="btnNavbarSearch" type="button"><i
                                    class="fas fa-search fa-fw text-secondary"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <a href="#" class="link-dark text-decoration-none">
                <div class="row">
                    <div class="col-10">
                        <p>Recommended Questions</p>
                    </div>
                    <div class="col">
                        <i class="fas fa-chevron-right fa-fw"></i>
                    </div>
                    <hr>
                </div>
            </a>
            <a href="#" class="link-dark text-decoration-none">
                <div class="row">
                    <div class="col-10">
                        <p>All Categories</p>
                    </div>
                    <div class="col">
                        <i class="fas fa-chevron-right fa-fw"></i>
                    </div>
                    <hr>
                </div>
            </a>
            <a href="#" class="link-dark text-decoration-none">
                <div class="row">
                    <div class="col-10">
                        <p>Customer Feedback</p>
                    </div>
                    <div class="col">
                        <i class="fas fa-chevron-right fa-fw"></i>
                    </div>
                    <hr>
                </div>
            </a>
            <a href="#" class="link-dark text-decoration-none">
                <div class="row">
                    <div class="col-10">
                        <p>Education</p>
                    </div>
                    <div class="col">
                        <i class="fas fa-chevron-right fa-fw"></i>
                    </div>
                    <hr>
                </div>
            </a>
            <a href="#" class="link-dark text-decoration-none">
                <div class="row">
                    <div class="col-10">
                        <p>Customer Satisfaction</p>
                    </div>
                    <div class="col">
                        <i class="fas fa-chevron-right fa-fw"></i>
                    </div>
                    <hr>
                </div>
            </a>
        </div>
        <div class="col-md-9 py-3">
            {{-- Question Form --}}
            <section class="question-form mb-5 px-5" id="question-form">
                <div class="row">
                    <div class="col-md-1">
                        <a href="#" class="link-default">
                            <h6>Pertanyaan</h6>
                        </a>
                    </div>
                    <div class="col-md-1">
                        <a href="#" class="link-secondary text-decoration-none">
                            <h6>Tambahan</h6>
                        </a>
                    </div>
                    <div class="col ms-auto"></div>
                    <div class="col text-end">
                        <button class="btn btn-outline-secondary me-3" type="submit">Cancel</button>
                        <button class="btn btn-default text-white px-4" type="submit">Save</button>
                    </div>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating my-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Judul Formulir">
                                <label for="floatingInput">Judul Formulir</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="question-desc" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="question-desc" rows="3"
                                    placeholder="Tulis Deskripsi.."></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 border rounded mt-3 py-3">
                            <div class="row">
                                <p>Pertanyaan anda</p>
                                <div class="col-md-10">
                                    <div class="form-floating my-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Masukkan Pertanyaan">
                                        <label for="floatingInput">Masukkan Pertanyaan</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="dropdown my-3">
                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Pilihan Ganda
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">Pilihan Ganda</a></li>
                                            <li><a class="dropdown-item" href="#">Pilihan Ganda</a></li>
                                            <li><a class="dropdown-item" href="#">Pilihan Ganda</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="myAnswer">
                                        <input type="text" class="form-control" id="myAnswer"
                                            aria-describedby="emailHelp" placeholder="Masukkan Jawaban">
                                    </div>
                                </div>
                                <div class="col">
                                    <a href="#" role="button" class="link-secondary text-decoration-none">
                                        <i class="fas fa-plus-circle fa-fw"></i>
                                    </a>
                                    <a href="#" role="button" class="link-secondary">
                                        <i class="fas fa-minus-circle fa-fw"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="myAnswer">
                                        <input type="text" class="form-control" id="myAnswer"
                                            aria-describedby="emailHelp" placeholder="Masukkan Jawaban">
                                    </div>
                                </div>
                                <div class="col">
                                    <a href="#" role="button" class="link-secondary text-decoration-none">
                                        <i class="fas fa-plus-circle fa-fw"></i>
                                    </a>
                                    <a href="#" role="button" class="link-secondary">
                                        <i class="fas fa-minus-circle fa-fw"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="myAnswer">
                                        <input type="text" class="form-control" id="myAnswer"
                                            aria-describedby="emailHelp" placeholder="Masukkan Jawaban">
                                    </div>
                                </div>
                                <div class="col">
                                    <a href="#" role="button" class="link-secondary text-decoration-none">
                                        <i class="fas fa-plus-circle fa-fw"></i>
                                    </a>
                                    <a href="#" role="button" class="link-secondary">
                                        <i class="fas fa-minus-circle fa-fw"></i>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col text-end">
                                    <a href="#" role="button" class="link-secondary text-decoration-none me-3">
                                        <i class="fas fa-trash-alt fa-fw"></i> Hapus
                                    </a>
                                    <a href="#" role="button" class="link-secondary text-decoration-none">
                                        <i class="fas fa-file-medical fa-fw"></i> Tambah
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
            {{-- End Question Form --}}
        </div>
    </div>
</section>
{{-- Sidebar --}}



@endsection