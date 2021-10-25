@extends('layouts.footer')
@extends('researcher.layouts.base')
@extends('researcher.layouts.navbar')

@section('content')

<div class="container-fluid p-5">
    <h2 class="fw-bold text-center mb-5">Personal Account</h2>
    <form action="#">
        @csrf
        <h5>Detail Tagihan</h5>
        <hr>
        <div class="row">
            <div class="col">
                <label for="first_name" class="form-label">Nama Depan</label>
                <input type="text" class="form-control @error('first_name')is-invalid @enderror" name="first_name"
                    placeholder="Ketik nama depan Anda" aria-label="Nama Depan" value="{{ old('first_name') }}"
                    required />
                @error('first_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="last_name" class="form-label">Nama Belakang</label>
                <input type="text" class="form-control @error('last_name')is-invalid @enderror" name="last_name"
                    placeholder="Ketik nama belakang Anda" aria-label="Nama Belakang" value="{{ old('last_name') }}"
                    required />
                @error('last_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="mt-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" name="email"
                aria-describedby="emailHelp" placeholder="Ketik email Anda" value="{{ old('email') }}" required />
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <h5 class="mt-5">Metode Pembayaran</h5>
        <hr>
        <div class="row mb-3 ms-1">
            <div class="col-md-1 border rounded shadow text-center pt-5 pb-4 me-3">
                <a href="#" class="link-secondary text-decoration-none">
                    <i class="fas fa-wallet fa-fw mb-1"></i>
                    <p>Credit Card</p>
                </a>
            </div>
            <div class="col-md-1 border border-default rounded shadow text-center pt-5 pb-4 me-3">
                <a href="#" class="link-default text-decoration-none">
                    <i class="fas fa-wallet fa-fw mb-1"></i>
                    <p>Debit Card</p>
                </a>
            </div>
            <div class="col-md-1 border rounded shadow text-center pt-5 pb-4 me-3">
                <a href="#" class="link-secondary text-decoration-none">
                    <i class="fas fa-wallet fa-fw mb-1"></i>
                    <p>E-Wallet</p>
                </a>
            </div>
        </div>
        <div class="col">
            <label for="bank_name" class="form-label">Nama Bank</label>
            <input type="text" class="form-control @error('bank_name')is-invalid @enderror" name="bank_name"
                placeholder="Ketik nama Bank Anda" aria-label="Nama Bank" value="{{ old('bank_name') }}" required />
            @error('bank_name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="account_number" class="form-label">No. Rekening</label>
                <input type="text" class="form-control @error('account_number')is-invalid @enderror"
                    name="account_number" placeholder="Ketik nomor rekening Anda" aria-label="No. Rekening"
                    value="{{ old('account_number') }}" required />
                @error('account_number')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="bank_code" class="form-label">Kode Bank</label>
                <input type="text" class="form-control @error('bank_code')is-invalid @enderror" name="bank_code"
                    placeholder="Ketik kode Bank Anda" aria-label="Kode Bank" value="{{ old('bank_code') }}" required />
                @error('bank_code')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="mt-3">
            <label for="account_name" class="form-label">Nama Pemilik</label>
            <input type="text" class="form-control @error('account_name')is-invalid @enderror" name="account_name"
                placeholder="Ketik nama pemilik rekening Anda" value="{{ old('account_name') }}" required />
            @error('account_name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <h5 class="mt-5">Rincian Pembayaran</h5>
        <hr>
        <div class="row">
            <div class="col">
                <p>Member Business Account per Bulan</p>
            </div>
            <div class="col text-end">
                <h5>Rp99.000</h5>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-end">
            {{-- <button type="submit" class="btn btn-default w-25 text-white my-3" name="submit">Beli</button> --}}
            <a class="btn btn-default w-25 text-white my-3" href="/researcher/dashboard" role="button">Beli</a>
        </div>
    </form>
</div>

@endsection