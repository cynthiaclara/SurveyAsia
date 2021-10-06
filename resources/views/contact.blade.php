@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar2')

@section('content')
{{-- Breadcrumb --}}
<section class="breadcrumb-contact pt-5" id="breadcrumb-contact">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="link-secondary text-decoration-none">Surveyasia Pusat
                        Bantuan</a></li>
                <li class="breadcrumb-item active text-dark" aria-current="page">Kirim Permintaan</li>
            </ol>
        </nav>
    </div>
</section>
{{-- End Breadcrumb --}}

{{-- Contact Us --}}
<section class="contact-us pb-5" id="contact-us">
    <div class="container">
        <h1 class="fw-bold">Kirim Permintaan</h1>
        <div class="hr-vm"></div>
        <form action="#">
            <h6 class="mt-3">Apakah anda seorang researcher atau seorang respondent? *</h6>
            <div class="col-md-6">
                <select class="form-select" aria-label="Default select example" name="roles">
                    <option selected>-</option>
                    <option value="1">Saya seorang reseacher</option>
                    <option value="2">Saya seorang respondent</option>
                </select>
            </div>
            <h6 class="mt-3">Alamat email anda *</h6>
            <div class="col-md-6">
                <input type="email" class="form-control" id="email" aria-describedby="email" name="email"
                    placeholder="example@gmail.com">
            </div>
            <h6 class="mt-3">Subjek *</h6>
            <div class="col-md-6">
                <input type="text" class="form-control" id="subject" aria-describedby="subject" name="subject"
                    placeholder="Tidak bisa isi survey">
            </div>
            <h6 class="mt-3">Deskripsi *</h6>
            <div class="col-md-6">
                <textarea class="form-control" placeholder="Tulis deskripsi di sini" id="textarea"
                    name="description"></textarea>
            </div>
            <div class="col-md-6">
                <p class="text-secondary mt-3">Masukkan detail permintaan Anda. Seseorang dari staff dukungan kami akan
                    menanggapi sesegera
                    mungkin.</p>
                <button class="btn btn-orange text-white rounded-pill px-5 my-3" type="submit">Send</button>
                <p class="text-secondary mt-3">Dengan mengisi formulir ini, Anda menyetujui <a href="#"
                        class="link-orange">Ketentuan Layanan</a> kami dan
                    telah membaca serta memahami <a href="#" class="link-orange">Kebijakan Privasi</a>.</p>
            </div>
        </form>
    </div>
</section>
{{-- End Contact Us --}}
@endsection