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
            <form action="{{ route('register') }}" method="post">
              @csrf
              <input type="hidden" name="role" value="3">

              <h2 class="text-default fw-bold">Data Pribadi</h2>
              <div class="col-md-12 border rounded p-4">
                <img src="/assets/img/uploaded_ktp.png" alt="Uploaded KTP"
                  class="img-fluid w-100 mb-5">

                @if ($errors->any())
                  <div class="mb-3">
                    <h4>List Of Errors</h4>
                    @foreach ($errors->all() as $error)
                      <p>{{ $error }}</p>
                    @endforeach
                  </div>
                @endif
                <div class="mb-3">
                  <label for="nik" class="form-label">NIK (Nomor Induk
                    Kependudukan) *</label>
                  <input type="text" class="form-control" id="nik" name="nik"
                    aria-describedby="nikHelp" required
                    value="{{ old('nik') }}">
                  @error('nik')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="first_name" class="form-label">Nama
                    Depan</label>
                  <input type="text" class="form-control" id="first_name"
                    name="first_name" aria-describedby="firstNameHelp" required
                    value="{{ old('first_name') }}">
                  @error('first_name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="lastName" class="form-label">Nama
                    Belakang</label>
                  <input type="text" class="form-control" id="lastName"
                    name="last_name" aria-describedby="lastNameHelp" required
                    value="{{ old('last_name') }}">
                  @error('last_name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="gender" class="form-label">Jenis Kelamin</label>
                  <select class="form-select" name="gender"
                    aria-label="Default select example" required
                    value="{{ old('gender') }}">
                    <option selected></option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                  @error('gender')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="placeOfBirth" class="form-label">Tempat
                    Lahir</label>
                  <input type="address" class="form-control" id="placeOfBirth"
                    name="birth_place" aria-describedby="placeOfBirthHelp"
                    required value="{{ old('birth_place') }}">
                  @error('birth_place')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="dateOfBirth" class="form-label">Tanggal
                    Lahir</label>
                  <input type="date" class="form-control" id="dateOfBirth"
                    name="birth_date" aria-describedby="dateOfBirthHelp" required
                    value="{{ old('birth_date') }}">
                  @error('birth_date')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="job" class="form-label">Pekerjaan</label>
                  <input type="text" class="form-control" id="job" name="job"
                    aria-describedby="jobHelp" required
                    value="{{ old('job') }}">
                  @error('job')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="jobAddress" class="form-label">Alamat
                    Kantor</label>
                  <textarea class="form-control" name="job_location"
                    id="jobAddress" rows="3" required
                    value="{{ old('job_location') }}"></textarea>
                  @error('job_location')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <h2 class="text-default fw-bold mt-5">Data Alamat</h2>
              <div class="col-md-12 border rounded p-4">
                <div class="mb-3">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="province"
                        class="form-label">Provinsi</label>
                      <input type="address" class="form-control" id="province"
                        name="ktp_province" aria-describedby="provinceHelp"
                        required value="{{ old('ktp_province') }}">
                      @error('ktp_province')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="col-md-6">
                      <label for="city" class="form-label">Kota</label>
                      <input type="address" class="form-control" id="city"
                        name="ktp_city" aria-describedby="cityHelp" required
                        value="{{ old('ktp_city') }}">
                      @error('ktp_city')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="district"
                        class="form-label">Kecamatan</label>
                      <input type="address" class="form-control" id="district"
                        name="ktp_district" aria-describedby="districtHelp"
                        required value="{{ old('ktp_district') }}">
                      @error('ktp_district')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="col-md-6">
                      <label for="zipCode" class="form-label">Kode Pos</label>
                      <input type="address" class="form-control" id="zipCode"
                        name="ktp_postal_code" aria-describedby="zipCodeHelp"
                        required value="{{ old('ktp_postal_code') }}">
                      @error('ktp_postal_code')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="addressTextArea"
                    class="form-label">Alamat</label>
                  <textarea class="form-control" name="ktp_address"
                    id="addressTextArea" rows="3" required
                    value="{{ old('ktp_address') }}"></textarea>
                  @error('ktp_address')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="checkbox mt-3">
                  <label>
                    <input type="checkbox" name="similar_address" id="checkbox"
                      value="checked" class="address-id-card"
                      onchange="addressChecked()">
                    Alamat tinggal saat ini sesuai dengan
                    KTP
                  </label>
                </div>
                <div class="current-address">
                  <div class="mt-5 mb-3">
                    <div class="row">
                      <h5 class="text-default">Alamat tinggal saat ini</h5>
                      <div class="col-md-6">
                        <label for="province"
                          class="form-label">Provinsi</label>
                        <input type="address" class="form-control" id="province"
                          name="province" aria-describedby="provinceHelp">
                        @error('province')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="col-md-6">
                        <label for="city" class="form-label">Kota</label>
                        <input type="address" class="form-control" id="city"
                          name="city" aria-describedby="cityHelp">
                        @error('city')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="row">
                      <div class="col-md-6">
                        <label for="district"
                          class="form-label">Kecamatan</label>
                        <input type="address" class="form-control" id="district"
                          name="district" aria-describedby="districtHelp">
                        @error('district')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="col-md-6">
                        <label for="zipCode" class="form-label">Kode
                          Pos</label>
                        <input type="address" class="form-control" id="zipCode"
                          name="postal_code" aria-describedby="zipCodeHelp">
                        @error('postal_code')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="addressTextArea"
                      class="form-label">Alamat</label>
                    <textarea class="form-control" name="address"
                      id="addressTextArea" rows="3"></textarea>
                    @error('address')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
              </div>

              <h2 class="text-default fw-bold mt-5">Email & Password</h2>
              <div class="col-md-12 border rounded p-4">
                <div class="row">
                  <div class="mt-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="username"
                      class="form-control @error('username')is-invalid @enderror"
                      id="username" name="username"
                      placeholder="Ketik username Anda"
                      value="{{ old('username') }}" />
                    @error('username')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="mt-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email"
                      class="form-control @error('email')is-invalid @enderror"
                      id="email" name="email" aria-describedby="emailHelp"
                      placeholder="Ketik email Anda" required
                      value="{{ old('email') }}" />
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="mt-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password"
                      class="form-control @error('password')is-invalid @enderror"
                      id="password" name="password"
                      placeholder="Ketik kata sandi Anda" required />
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
                  <a class="btn btn-outline-default w-100" href="#"
                    role="button">Kembali</a>
                </div>
                <div class="col-md-6">
                  <button type="submit"
                    class="btn btn-default text-white w-100">Selesai</button>
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
