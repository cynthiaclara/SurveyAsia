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

{{-- Choose FAQ --}}
<section class="faq py-5" id="faq">
    <div class="container">
        <h4 class="text-center">FAQ</h4>
        <hr class="hr-vm-orange mx-auto">
        <div class="row justify-content-evenly mt-5">
            <div class="col-md-3 d-flex align-items-center justify-content-center shadow faq-card">
                <a href="#" class="text-decoration-none text-dark">
                    <p>General Information</p>
                </a>
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-center shadow faq-card">
                <a href="#" class="text-decoration-none text-dark">
                    <p>Respondent</p>
                </a>
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-center shadow faq-card">
                <a href="#" class="text-decoration-none text-dark">
                    <p>Researcher</p>
                </a>
            </div>
        </div>
        <div class="row justify-content-evenly mt-5">
            <div class="col-md-3 d-flex align-items-center justify-content-center shadow faq-card">
                <a href="#" class="text-decoration-none text-dark">
                    <p>Template</p>
                </a>
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-center shadow faq-card">
                <a href="#" class="text-decoration-none text-dark">
                    <p>Tukar Poin</p>
                </a>
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-center shadow faq-card">
                <a href="#" class="text-decoration-none text-dark">
                    <p>Question Bank</p>
                </a>
            </div>
        </div>
    </div>
</section>
{{-- End Choose FAQ --}}

{{-- Vision & Mission --}}
<h4 class="text-center mt-3">Visi & Misi</h4>
<hr class="hr-vm-orange mx-auto">
<section class="vision-mission py-5" id="vision-mission">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p class="text-default">Visi</p>
                <h5>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti rerum iusto delectus, praesentium
                    perferendis ratione ad labore a officia, repudiandae veniam nihil explicabo provident, similique
                    nostrum ipsa illum dolorem officiis."
                </h5>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <p class="text-orange">Misi</p>
                <h5>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti rerum iusto delectus, praesentium
                    perferendis ratione ad labore a officia, repudiandae veniam nihil explicabo provident, similique
                    nostrum ipsa illum dolorem officiis."
                </h5>
            </div>
        </div>
</section>
{{-- End Vision & Mission --}}

{{-- Award --}}
<section class="award py-5" id="award">
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
</section>
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
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet hic accusamus vitae ipsum officia
            rerum dicta deleniti ipsa facilis aut repudiandae enim minus, neque quidem aperiam corporis esse
            aliquam suscipit saepe necessitatibus quae obcaecati fuga ab. Exercitationem eveniet necessitatibus,
            quaerat voluptatum mollitia nobis dicta quasi magni placeat sit fuga molestias quae natus inventore
            laborum repudiandae iure repellendus quibusdam sed. Eum, repellendus, tempore debitis, natus quam
            amet dolores possimus impedit reprehenderit tempora voluptates dicta modi. Esse voluptate ea nobis
            minima id cum molestias eaque perspiciatis consequuntur quam earum et eius iure, minus ipsum nam,
            fugit quo fugiat sed est doloribus velit.
        </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet hic accusamus vitae ipsum officia
            rerum dicta deleniti ipsa facilis aut repudiandae enim minus, neque quidem aperiam corporis esse
            aliquam suscipit saepe necessitatibus quae obcaecati fuga ab. Exercitationem eveniet necessitatibus,
            quaerat voluptatum mollitia nobis dicta quasi magni placeat sit fuga molestias quae natus inventore
            laborum repudiandae iure repellendus quibusdam sed. Eum, repellendus, tempore debitis, natus quam
            amet dolores possimus impedit reprehenderit tempora voluptates dicta modi. Esse voluptate ea nobis
            minima id cum molestias eaque perspiciatis consequuntur quam earum et eius iure, minus ipsum nam,
            fugit quo fugiat sed est doloribus velit.
        </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet hic accusamus vitae ipsum officia
            rerum dicta deleniti ipsa facilis aut repudiandae enim minus, neque quidem aperiam corporis esse
            aliquam suscipit saepe necessitatibus quae obcaecati fuga ab. Exercitationem eveniet necessitatibus,
            quaerat voluptatum mollitia nobis dicta quasi magni placeat sit fuga molestias quae natus inventore
            laborum repudiandae iure repellendus quibusdam sed. Eum, repellendus, tempore debitis, natus quam
            amet dolores possimus impedit reprehenderit tempora voluptates dicta modi. Esse voluptate ea nobis
            minima id cum molestias eaque perspiciatis consequuntur quam earum et eius iure, minus ipsum nam,
            fugit quo fugiat sed est doloribus velit.
        </p>
    </div>
</section>
{{-- End TaC --}}
@endsection