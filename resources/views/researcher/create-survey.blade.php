@extends('layouts.footer')
@extends('layouts.base')
@extends('researcher.layouts.navbar2')

@section('content')

{{-- Breadcrumb --}}
<section class="breadcrumb-contact mt-3" id="breadcrumb-contact">
    <div class="container">
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
    </div>
</section>
{{-- End Breadcrumb --}}

<hr>

{{-- Question Form --}}
<section class="question-form mb-5" id="question-form">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="#" class="link-default">
                    <h6>Pertanyaan</h6>
                </a>
            </div>
            <div class="col-md-2">
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
                <div class="col-md-8">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Judul Formulir">
                        <label for="floatingInput">Judul Formulir</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Tulis Deskripsi"></textarea>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="myQuestion" class="form-label">Pertanyaan anda</label>
                        <input type="text" class="form-control" id="myQuestion" aria-describedby="emailHelp"
                            placeholder="Masukkan Pertanyaan">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="myAnswer">
                        <input type="text" class="form-control" id="myAnswer" aria-describedby="emailHelp"
                            placeholder="Masukkan Jawaban">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="myAnswer">
                        <input type="text" class="form-control" id="myAnswer" aria-describedby="emailHelp"
                            placeholder="Masukkan Jawaban">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="myAnswer">
                        <input type="text" class="form-control" id="myAnswer" aria-describedby="emailHelp"
                            placeholder="Masukkan Jawaban">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="myAnswer">
                        <input type="text" class="form-control" id="myAnswer" aria-describedby="emailHelp"
                            placeholder="Masukkan Jawaban">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
{{-- End Question Form --}}

@endsection