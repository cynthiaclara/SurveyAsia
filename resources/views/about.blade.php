@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar')

@section('content')
{{-- Hero About --}}
<section class="hero-about py-5" id="hero-about">
    <div class="container">
        <div class="row h-25">
            <div class="col-auto align-self-center">
                <h1 class="text-white">Tentang Kami</h1>
            </div>
        </div>
    </div>
</section>
{{-- End Hero About --}}

{{-- Vision & Mission --}}
<h4 class="text-center mt-3">Visi & Misi</h4>
<hr class="hr-vm-orange mx-auto">
<section class="vision-mission py-5" id="vision-mission">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p class="text-default">Visi</p>
                <h5>"Menjadi platform riset online terbaik bagi individu maupun perusahaan."</h5>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <p class="text-orange">Misi</p>
                <h5>"Surveyasia.id membantu individu maupun perusahaan dengan memberikan solusi melalui hasil riset yang
                    cepat, dapat diandalkan, dan berwawasan luas yang akan membawa kepada seuah keputusan yang lebih
                    baik."
                </h5>
            </div>
        </div>
</section>
{{-- End Vision & Mission --}}

{{-- Award --}}
{{-- <section class="award py-5" id="award">
    <div class="container">
        <h4 class="text-center">Penghargaan</h4>
        <hr class="hr-vm-orange mx-auto">
        <div class="row mt-5">
            @for ($i = 0; $i < 3; $i++) <div class="col-md-4 text-center">
                <img src="/assets/img/ellipse_orange_2.png" alt="Ellipse" class="mb-3">
                <h5>Lorem ipsum dolor sit amet</h5>
                <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum, soluta!</p>
        </div>
        @endfor
    </div>
    </div>
</section> --}}
{{-- End Award --}}

{{-- Partner --}}
<section class="partner py-5" id="partner">
    <div class="container">
        <h4 class="text-center">Mitra</h4>
        <hr class="hr-vm-orange mx-auto">
        <div class="row">
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img src="/assets/img/partner_1.png" alt="Partner" class="img-fluid">
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img src="/assets/img/partner_2.png" alt="Partner" class="img-fluid">
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img src="/assets/img/partner_3.png" alt="Partner" class="img-fluid">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img src="/assets/img/partner_4.png" alt="Partner" class="img-fluid">
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img src="/assets/img/partner_5.png" alt="Partner" class="img-fluid">
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img src="/assets/img/partner_6.png" alt="Partner" class="img-fluid">
            </div>
        </div>
    </div>
</section>
{{-- End Partner --}}

{{-- Contanct Info --}}
<section class="contact-info py-5" id="contact-info">
    <div class="container">
        <h2 class="fw-bold">Contact Info</h2>
        <hr class="hr-vm-orange">
        <h5 class="text-secondary">Butuh pertolongan?</h5>
        <h5 class="text-secondary">Berikut cara menghubungi kami.</h5>
        <a href="/contact" class="link-dark text-decoration-none">
            <h5 class="fw-bold my-5">Kirim permintaan bantuan <i class="fas fa-long-arrow-alt-right"></i></h5>
        </a>
        <div class="row">
            <div class="col-md-3 d-flex">
                <img src="/assets/img/ic_contact_info_1.png" alt="Contact Info 1" class="me-3" width="36" height="36">
                <p class="fw-light">Graha Mustika Ratu 5th Floor 503, Tebet, Jakarta Selatan 12870</p>
            </div>
            <div class="col-md-3 d-flex">
                <img src="/assets/img/ic_contact_info_2.png" alt="Contact Info 2" class="me-3" width="36" height="36">
                <p class="fw-light">021-8370-7143</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 d-flex"><img src="/assets/img/ic_contact_info_3.png" alt="Contact Info 3" class="me-3"
                    width="36" height="36">
                <p class="fw-light">info@citiasiainc.id</p>
            </div>
            <div class="col-md-3 d-flex"><img src="/assets/img/ic_contact_info_4.png" alt="Contact Info 4" class="me-3"
                    width="36" height="36">
                <p class="fw-light">021-8370-5680</p>
            </div>
        </div>
    </div>
</section>
{{-- End Contact Info --}}

{{-- TaC --}}
<section class="tac py-5" id="tac">
    <div class="container">
        <span class="d-flex">
            <h4 class="mb-3 me-2">Syarat & Ketentuan Penggunaan</h4>
            <h4 class="text-orange">Surveyasia</h4>
        </span>
        <p>1. Pernyataan Pengguna</p>
        <p>1.1. Syarat & Ketentuan merupakan perjanjian yang sah antara Pengguna dengan Surveyasia. Jika Pengguna tidak
            menyetujui salah satu, sebagian, atau seluruh isi Syarat & ketentuan, maka pengguna tidak diperkenakan
            menggunakan layanan di Situs Web Surveyasia.
        </p>
        <p>1.2. Surveyasia berhak, kapan saja dan dari waktu ke waktu, untuk mengubah dan/atau mengganti Syarat &
            Ketentuan ini secara keseluruhan atau sebagian, tanpa pemberitahuan kepada Pengguna. Pengguna yang tetap
            menggunakan layanan Surveyasia merupakan tanda pengakuan afirmatif atas modifikasi apa pun dan persetujuan
            oleh Pengguna untuk tetap terikat oleh Syarat dan Ketentuan yang telah diubah dan/atau diganti. Pengguna
            diharapkan untuk memeriksa halaman ini dari waktu ke waktu untuk memperhatikan perubahan yang telah
            Surveyasia buat, karena hal itu mengikat Pengguna.
        </p>
        <p>1.3. Surveyasia memproses informasi tentang Pengguna sesuai dengan Kebijakan Privasi. Dengan menggunakan
            layanan Surveyasia, Pengguna menyetujui pemrosesan tersebut dan Pengguna menjamin bahwa semua data yang
            Pengguna berikan akurat.
        </p>
        <p>1.5. Akses ke layanan Surveyasia disediakan "sebagaimana adanya" dan penggunaan Pengguna terhadap layanan
            Surveyasia merupakan risiko Pengguna sendiri.</p>
    </div>
</section>
{{-- End TaC --}}
@endsection