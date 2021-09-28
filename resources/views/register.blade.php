<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Register || SurveyAsia</title>
  </head>
  <body>

  <section class="sign-up-form" id="sign-up-form">

      <div class="sign-up container">

        <div class="row">

            <div class="col-md-6 sign-up-left">
                    <h1 style="margin-left : 19%;" class="text-highlight text-white fw-bold mb-5 mt-5">
                        Saya melihat anda <br />
                        pertama kali disini <br />
                    </h1>
                <div class="d-flex align-items-center justify-content-center">
                    <p class="text-align text-white fw-bold mb-5">
                    it is a long established fact that a reader will be<br />
                    when looking at is layout  </p> 
                </div>

                
                    <img class="buletan-oren-register"
                        src="assets/images/1.png"
                        alt="Log In"
                        class="img-fluid kadal"
                    />
                    <img class="buletan-hijau-register"
                        src="assets/images/elips.png"
                        alt="Log In"
                        class="img-fluid"
                    />
            </div>

          <div class="col-md-6 sign-up-right justify-content-center">
              <h4 class="mb-3 fw-bold">Buat akun anda</h4>
              <h6 class="mb-4">Gratis dan mudah</h6>

            <form>
            <div class="row">
            <div class="col">
            <label for="Nama Depan" class="form-label fw-bold"
                      >Nama Depan</label>
              <input type="text" class="form-control" placeholder="ketik Nama Depan Anda" aria-label="Nama Depan">
            </div>
            <div class="col">
              <label for="Nama Belakang" class="form-label fw-bold"
                  >Nama Belakang</label>
              <input type="text" class="form-control" placeholder="ketik Nama Belakang Anda" aria-label="Nama Belakang">
            </div>
          </div>

          <div>
                <label for="username" class="form-label fw-bold" >Username</label>
                <input
                  type="username"
                  class="form-control"
                  id="username"
                  placeholder="ketik Username Anda"
                />
              </div>
    
            <div class="row">
            <div class="col">
            <label for="nik" class="form-label fw-bold"
                      >NIK</label>
              <input type="text" class="form-control" placeholder="ketik NIK Anda" aria-label="nik">
            </div>
            <div class="col">
              <label for="no_tlp" class="form-label fw-bold"
                  >Nomor Telepon</label>
              <input type="text" class="form-control" placeholder="ketik Nomor Telepon Anda" aria-label="no_tlp">
            </div>
          </div>

          <div>
                <label for="email" class="form-label fw-bold">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  aria-describedby="emailHelp"
                  placeholder="ketik Email Anda"
                />
              </div>
              <div>
                <label for="password" class="form-label fw-bold"
                  >Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  placeholder="*********"
                />
                <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                 8-20 Karakter
                </span>
                   </div>
              </div>

              <div>
                <label for="profesi" class="form-label fw-bold" >Profesi</label>
                <input
                  type="profesi"
                  class="form-control"
                  id="profesi"
                  placeholder="ketik Profesi Anda"
                />
              </div>

              <div>
                <label for="Company" class="form-label fw-bold" >Company</label>
                <input
                  type="Company"
                  class="form-control"
                  id="Company"
                  placeholder="ketik Company Anda"
                />
              </div>
              <div class="my-3">
                <label for="Company" class="form-label fw-bold" >Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" />
            </div>


            <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                                <label class="form-label fw-bold">Status</label>
                                <select name="status" class="form-control">
                                        <option value=""> Pilih </option>
                                            <option value="Resercher"> Resercher </option>
                                            <option value="Responden"> Responden </option>
                                            <option value="Multi"> Multi </option>
                                </select>
            </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                                <label class="form-label fw-bold">Gender</label>
                                <select name="gender" class="form-control">
                                        <option value=""> Pilih </option>
                                            <option value="Perempuan"> Perempuan </option>
                                            <option value="Laki-Laki"> Laki-Laki </option>
                                </select>
            </div>
            </div>
            </div>

            <div class="my-2">
                <label class="form-label fw-bold" for="alamat">Alamat</label>
                <div>
                    <textarea id="alamat" name="alamat" class="form-control" required></textarea>
                </div>
            </div>

              <div class="checkbox mt-1">
              <label>
                <input type="checkbox" value="remember-me"> Dengan membuat akun berarti anda menyetujui syarat dan ketentuan, serta kebijakan privasi kami
              </label>
            </div>
            <button
                type="submit"
                class="btn btn-primary btn-login-form fw-bold my-2">
                Daftar
              </button>
            </form>

            <p class="text-center mt-3">atau masuk dengan akun lain</p>

            <div class="d-flex justify-content-center">
              <a href="#"
                ><img src="assets/images/btn_google.png" alt="Google"
              /></a>
              <a href="#"
                ><img src="assets/images/btn_facebook.png" alt="Google"
              /></a>
              <a href="#"
                ><img src="assets/images/btn_linkedin.png" alt="Google"
              /></a>
            </div>
            <div class="col-md-6 ">
              <p>
              Sudah Memiliki Akun?
              <a href="welcome" class="text-login fw-bold">Masuk</a>
            </p>
            </div>
            
          </div>
        </div>
      </div>
    </section>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

   
  </body>
</html>