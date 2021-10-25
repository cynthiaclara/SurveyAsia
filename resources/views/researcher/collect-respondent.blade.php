@extends('layouts.footer')
@extends('layouts.base')
@extends('researcher.layouts.breadcrumb')
@extends('researcher.layouts.navbar2')

@section('content')

{{-- Collect Respondent --}}
<section class="collect-respondent py-5" id="collect-respondent">
    <div class="container">
        <h4>Collect Responses</h4>
        <div class="border rounded p-5">
            <div class="row">
                <h6 class="mb-5">Step ke-1: Siapa yang ingin kamu survei?</h6>
                <div class="col me-3">
                    <input type="radio" class="btn-check" name="region" id="region" autocomplete="off" value="region">
                    <label class="btn border" for="region">
                        <p>Wilayah</p>
                        <img src="/assets/img/region_respondent.png" alt="region" height="130" class="rounded p-4">
                    </label>
                </div>
                <div class="col me-3">
                    <input type="radio" class="btn-check" name="gender" id="gender" autocomplete="off" value="gender">
                    <label class="btn border" for="gender">
                        <p>Jenis Kelamin</p>
                        <img src="/assets/img/gender_respondent.png" alt="gender" height="130" class="rounded p-4">
                    </label>
                </div>
                <div class="col me-3">
                    <input type="radio" class="btn-check" name="age" id="age" autocomplete="off" value="age">
                    <label class="btn border" for="age">
                        <p>Umur</p>
                        <img src="/assets/img/age_respondent.png" alt="age" height="130" class="rounded p-4">
                    </label>
                </div>
                <div class="col">
                    <input type="radio" class="btn-check" name="income" id="income" autocomplete="off" value="income">
                    <label class="btn border" for="income">
                        <p>Pendapatan</p>
                        <img src="/assets/img/income_respondent.png" alt="income" height="130" class="rounded p-4">
                    </label>
                </div>
            </div>
        </div>
        <div class="bg-light-grey rounded mt-3 p-5">
            <h6>Wilayah</h6>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih Wilayah</option>
                    <option value="1">Jakarta</option>
                    <option value="2">Bandung</option>
                    <option value="3">Bali</option>
                </select>
            </div>
        </div>
        <div class="bg-light-grey rounded mt-3 p-5">
            <h6>Jenis Kelamin</h6>
            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="allGender" checked>
                    <label class="form-check-label" for="allGender">
                        Semuanya
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender">
                    <label class="form-check-label" for="maleGender">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender">
                    <label class="form-check-label" for="femaleGender">
                        Perempuan
                    </label>
                </div>
            </div>
        </div>
        <div class="bg-light-grey rounded mt-3 p-5">
            <h6>Umur</h6>
            <div class="row justify-content-between">
                <div class="mt-3">
                    <input type="range" class="form-range" min="18" max="99" id="ageRange">
                </div>
                <div class="col-md-1 text-center">
                    <div class="mb-3">
                        <label for="minAge" class="form-label text-muted">Min</label>
                        <input type="number" class="form-control" id="minAge" placeholder="18" min="18" max="99">
                    </div>
                </div>
                <div class="col-md-1 text-center">
                    <div class="mb-3">
                        <label for="maxAge" class="form-label text-muted">Max</label>
                        <input type="number" class="form-control" id="maxAge" placeholder="99" min="18" max="99">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-light-grey rounded mt-3 p-5">
            <h6>Pendapatan</h6>
            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="allIncome" id="selectAllIncome">
                    <label class="form-check-label" for="selectAllIncome">
                        Pilih Semua
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="zeroIncome" id="selectZeroIncome">
                    <label class="form-check-label" for="selectZeroIncome">
                        Rp0 - Rp30.000.000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="thirtyIncome" id="selectThirtyIncome">
                    <label class="form-check-label" for="selectThirtyIncome">
                        Rp30.000.001 - Rp60.000.000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="sixtyIncome" id="selectSixtyIncome">
                    <label class="form-check-label" for="selectSixtyIncome">
                        Rp60.000.001 - Rp120.000.000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="oneTwentyIncome" id="selectOneTwentyIncome">
                    <label class="form-check-label" for="selectOneTwentyIncome">
                        Rp120.000.001 - Rp180.000.000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="oneEightyIncome" id="selectOneEightyIncome">
                    <label class="form-check-label" for="selectOneEightyIncome">
                        Lebih dari Rp180.000.000
                    </label>
                </div>
            </div>
        </div>
        <div class="border rounded p-5 mt-4">
            <div class="row">
                <h6 class="mb-5">Step ke-2: Berapa banyak responden yang dibutuhkan?</h6>
                <div class="col-md-1">
                    <input type="number" class="form-control" id="number" name="totalRespondent" min="1"
                        placeholder="220">
                </div>
                <div class="col align-self-center">
                    <div class="progress">
                        <div class="progress-bar bg-orange" role="progressbar" style="width: 25%;" aria-valuenow="220"
                            aria-valuemin="0" aria-valuemax="3000">220
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Collect Respondent --}}

@endsection