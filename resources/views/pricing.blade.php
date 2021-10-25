@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar')

@section('content')

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
                <li class="nav-item" role="presentation">
                    <a class="nav-link link-pricing link-secondary" aria-current="page" href="#" id="free-tab"
                        data-bs-toggle="tab" data-bs-target="#free" type="button" role="tab" aria-controls="free"
                        aria-selected="true">
                        <h4 class="fw-bold mb-5">Free</h4>
                    </a>
                </li>
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
                        data-bs-toggle="tab" data-bs-target="#business" type="button" role="tab"
                        aria-controls="business" aria-selected="true">
                        <h4 class="fw-bold mb-5">Business</h4>
                    </a>
                </li>
            </ul>
            {{-- End Tab --}}
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="free" role="tabpanel" aria-labelledby="free-tab">
                    <div class="container">
                        <div class="row justify-content-center business-price mb-5" id="business-price">
                            <div class="col-md-4">
                                <div class="rounded p-3">
                                    <h5 class="text-orange">Free</h5>
                                    <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Autem quo
                                        sint,
                                        sed repellat eius quam?
                                    </p>
                                    <h5 class="text-orange">Free</h5>
                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quis,
                                        labore.</p>
                                    <a class="btn btn-orange text-light w-50 mb-3" href="/researcher/dashboard"
                                        role="button">Selanjutnya</a>
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
                <div class="tab-pane fade" id="pay-per-survey" role="tabpanel" aria-labelledby="pay-per-survey-tab">
                    <div class="container">
                        <div class="row justify-content-center business-price mb-5" id="business-price">
                            <div class="col-md-4">
                                <div class="rounded p-3">
                                    <h5 class="text-orange">Custom</h5>
                                    <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Autem quo
                                        sint,
                                        sed repellat eius quam?
                                    </p>
                                    <h5 class="text-orange">Contact Us</h5>
                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quis,
                                        labore.</p>
                                    <a class="btn btn-orange text-light w-50 mb-3" href="/contact" role="button">Contact
                                        Us</a>
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
                                    <h5 class="text-orange">Basic</h5>
                                    <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Autem quo
                                        sint,
                                        sed repellat eius quam?
                                    </p>
                                    <h5 class="text-orange">Rp249.000/bulan</h5>
                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quis,
                                        labore.
                                    </p>
                                    <a class="btn btn-orange text-light w-50 mb-3" href="/payment"
                                        role="button">Beli</a>
                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quis,
                                        labore.
                                    </p>
                                    @for ($i = 0; $i < 5; $i++) <p>&#10004; Lorem ipsum dolor sit amet</p>
                                        @endfor
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bg-light-default rounded p-3">
                                    <h5 class="text-default">Essential Annual</h5>
                                    <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Autem quo
                                        sint,
                                        sed repellat eius quam?
                                    </p>
                                    <h5 class="text-default">Rp199.000/bulan</h5>
                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quis,
                                        labore.
                                    </p>
                                    <a class="btn btn-default text-light w-50 mb-3" href="/payment"
                                        role="button">Beli</a>
                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quis,
                                        labore.
                                    </p>
                                    @for ($i = 0; $i < 5; $i++) <p>&#10004; Lorem ipsum dolor sit amet</p>
                                        @endfor
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="rounded p-3">
                                    <h5 class="text-orange">Plus Annual</h5>
                                    <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Autem quo
                                        sint,
                                        sed repellat eius quam?
                                    </p>
                                    <h5 class="text-orange">Rp449.000/bulan</h5>
                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quis,
                                        labore.
                                    </p>
                                    <a class="btn btn-orange text-light w-50 mb-3" href="/payment"
                                        role="button">Beli</a>
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
                                    <h5 class="text-orange">Advantage</h5>
                                    <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Autem quo
                                        sint,
                                        sed repellat eius quam?
                                    </p>
                                    <h5 class="text-orange">Rp1.099.000/user</h5>
                                    <p class="text-secondary">Minimal 3 User</p>
                                    <a class="btn btn-orange text-light w-50 mb-3" href="/payment"
                                        role="button">Beli</a>
                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quis,
                                        labore.
                                    </p>
                                    @for ($i = 0; $i < 5; $i++) <p>&#10004; Lorem ipsum dolor sit amet</p>
                                        @endfor
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bg-light-default rounded p-3">
                                    <h5 class="text-default">Enterprise</h5>
                                    <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Autem quo
                                        sint,
                                        sed repellat eius quam?
                                    </p>
                                    <h5 class="text-default">Rp1.999.000/user</h5>
                                    <p class="text-secondary">Minimal 5 User</p>
                                    <a class="btn btn-default text-light w-50 mb-3" href="/payment"
                                        role="button">Beli</a>
                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quis,
                                        labore.
                                    </p>
                                    @for ($i = 0; $i < 5; $i++) <p>&#10004; Lorem ipsum dolor sit amet</p>
                                        @endfor
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="rounded p-3">
                                    <h5 class="text-orange">Corporate</h5>
                                    <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Autem quo
                                        sint,
                                        sed repellat eius quam?
                                    </p>
                                    <h5 class="text-orange">Contact Us</h5>
                                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quis,
                                        labore.
                                    </p>
                                    <a class="btn btn-orange text-light w-50 mb-3" href="/contact" role="button">Contact
                                        Us</a>
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

@endsection