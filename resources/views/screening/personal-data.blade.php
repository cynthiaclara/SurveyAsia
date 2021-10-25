@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.nav')

@section('content')

{{-- Personal Data --}}
<section class="personal-data py-5" id="personal-data">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h2>5 Cara mudah</h2>
        <p>Pendaftaran Responden Surveyasia</p>
        <ol class="text-orange">
          <li>
            <h5>Upload E-KTP</h5>
          </li>
          <li>
            <h5>Data Pribadi</h5>
          </li>
          <li>
            <h5>Data Alamat</h5>
          </li>
          <li>
            <h5>Email & Password</h5>
          </li>
        </ol>
      </div>
      <div class="col-md-9">
        <div class="row">
          <h2 class="text-default fw-bold">Data Pribadi</h2>
          <div class="col-md-12 border rounded p-4">
            <img src="/assets/img/uploaded_ktp.png" alt="Uploaded KTP" class="img-fluid w-100 mb-5">
            <form action="{{ route('register') }}" method="post">
              @csrf
              <div class="mb-3">
                <label for="nik" class="form-label">NIK (Nomor Induk
                  Kependudukan) *</label>
                <input type="text" class="form-control" id="nik" name="nik" aria-describedby="nikHelp">
              </div>
              <div class="mb-3">
                <label for="firstName" class="form-label">Nama Depan</label>
                <input type="text" class="form-control" id="firstName" name="firstName"
                  aria-describedby="firstNameHelp">
              </div>
              <div class="mb-3">
                <label for="lastName" class="form-label">Nama
                  Belakang</label>
                <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="lastNameHelp">
              </div>
              <div class="mb-3">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected></option>
                  <option value="1">Laki-laki</option>
                  <option value="2">Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="placeOfBirth" class="form-label">Tempat
                  Lahir</label>
                <input type="address" class="form-control" id="placeOfBirth" name="placeOfBirth"
                  aria-describedby="placeOfBirthHelp">
              </div>
              <div class="mb-3">
                <label for="dateOfBirth" class="form-label">Tanggal
                  Lahir</label>
                <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth"
                  aria-describedby="dateOfBirthHelp">
              </div>
              <div class="mb-3">
                <label for="job" class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" id="job" name="job" aria-describedby="jobHelp">
              </div>
              <div class="mb-3">
                <label for="jobAddress" class="form-label">Alamat
                  Kantor</label>
                <textarea class="form-control" name="address" id="jobAddress" rows="3"></textarea>
              </div>
          </div>
          <h2 class="text-default fw-bold mt-5">Data Alamat</h2>
          <div class="col-md-12 border rounded p-4">
            <div class="mb-3">
              <div class="row">
                <div class="col-md-6">
                  <label for="province" class="form-label">Provinsi</label>
                  <input type="address" class="form-control" id="province" name="province"
                    aria-describedby="provinceHelp">
                </div>
                <div class="col-md-6">
                  <label for="city" class="form-label">Kota</label>
                  <input type="address" class="form-control" id="city" name="city" aria-describedby="cityHelp">
                </div>
              </div>
            </div>
            <div class="mb-3">
              <div class="row">
                <div class="col-md-6">
                  <label for="district" class="form-label">Kecamatan</label>
                  <input type="address" class="form-control" id="district" name="district"
                    aria-describedby="districtHelp">
                </div>
                <div class="col-md-6">
                  <label for="zipCode" class="form-label">Kode Pos</label>
                  <input type="address" class="form-control" id="zipCode" name="zipCode" aria-describedby="zipCodeHelp">
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="addressTextArea" class="form-label">Alamat</label>
              <textarea class="form-control" name="address" id="addressTextArea" rows="3"></textarea>
            </div>
            <div class="checkbox mt-3">
              <label>
                <input type="checkbox" name="checkbox" id="checkbox" value="addressIdCard"
                  class="address-id-card @error('checkbox')is-invalid @enderror" onchange="addressChecked()" required>
                Alamat tinggal saat ini sesuai dengan
                KTP
              </label>
              @error('checkbox')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="current-address">
              <div class="mt-5 mb-3">
                <div class="row">
                  <h5 class="text-default">Alamat tinggal saat ini</h5>
                  <div class="col-md-6">
                    <label for="province" class="form-label">Provinsi</label>
                    <input type="address" class="form-control" id="province" name="province"
                      aria-describedby="provinceHelp">
                  </div>
                  <div class="col-md-6">
                    <label for="city" class="form-label">Kota</label>
                    <input type="address" class="form-control" id="city" name="city" aria-describedby="cityHelp">
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <div class="row">
                  <div class="col-md-6">
                    <label for="district" class="form-label">Kecamatan</label>
                    <input type="address" class="form-control" id="district" name="district"
                      aria-describedby="districtHelp">
                  </div>
                  <div class="col-md-6">
                    <label for="zipCode" class="form-label">Kode Pos</label>
                    <input type="address" class="form-control" id="zipCode" name="zipCode"
                      aria-describedby="zipCodeHelp">
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="addressTextArea" class="form-label">Alamat</label>
                <textarea class="form-control" name="address" id="addressTextArea" rows="3"></textarea>
              </div>
            </div>
          </div>
          <h2 class="text-default fw-bold mt-5">Email & Password</h2>
          <div class="col-md-12 border rounded p-4">
            <div class="row">
              <div class="mt-3">
                <label for="username" class="form-label">Username</label>
                <input type="username" class="form-control @error('username')is-invalid @enderror" id="username"
                  name="username" placeholder="Ketik username Anda" value="{{ old('username') }}" />
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mt-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" name="email"
                  aria-describedby="emailHelp" placeholder="Ketik email Anda" required value="{{ old('email') }}" />
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mt-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password')is-invalid @enderror" id="password"
                  name="password" placeholder="Ketik kata sandi Anda" required />
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
                <div class="col-auto">
                  <span id="passwordHelpInline" class="form-text">
                    Harus minimal 8 karakter
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-6">
              <a class="btn btn-outline-default w-100" href="#" role="button">Kembali</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-default text-white w-100" href="/respondent/dashboard" role="button">Lanjutkan</a>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- End Personal Data --}}

@endsection