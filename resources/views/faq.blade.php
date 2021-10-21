@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar')

@section('content')

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

@endsection