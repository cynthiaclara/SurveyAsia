@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar2')

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

{{-- Choose Topic --}}
<section class="choose-topic py-5" id="choose-topic">
    <div class="container">
        <h4 class="text-center">Pilih Topik</h4>
        <div class="row justify-content-evenly mt-5">
            <div class="col-md-3 d-flex align-items-center justify-content-center shadow topic-card">
                <a href="#" class="text-decoration-none text-dark">
                    <p>Template</p>
                </a>
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-center shadow topic-card">
                <a href="#" class="text-decoration-none text-dark">
                    <p>Harga</p>
                </a>
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-center shadow topic-card">
                <a href="#" class="text-decoration-none text-dark">
                    <p>Blog</p>
                </a>
            </div>
        </div>
        <div class="row justify-content-evenly mt-5">
            <div class="col-md-3 d-flex align-items-center justify-content-center shadow topic-card">
                <a href="#" class="text-decoration-none text-dark">
                    <p>Penarikan Hadiah</p>
                </a>
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-center shadow topic-card">
                <a href="#" class="text-decoration-none text-dark">
                    <p>Create Survey</p>
                </a>
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-center shadow topic-card">
                <a href="#" class="text-decoration-none text-dark">
                    <p>Pembayaran</p>
                </a>
            </div>
        </div>
    </div>
</section>
{{-- End Choose Topic --}}

{{-- Vision & Mission --}}
<h4 class="text-center mt-3">Visi & Misi</h4>
<hr class="hr-vm-orange mx-auto">
<section class="vision-mission py-5" id="vision-mission">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p class="text-info">Visi</p>
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
        <h4 class="mb-3">Syarat & Ketentuan</h4>
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