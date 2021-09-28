<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    
    <title>Login || SurveyAsia</title>
  </head>
  <body>
 <!-- Login Form -->
 <section class="login-form" id="login-form">
      <div class="login container my-5">
        <div class="row">
            <div class="col-md-6 sign-up-left">
                    <h2 style="margin-left : 19%;" class="text-highlight text-white fw-bold mb-2">
                        Mari kita membuat sesuatu<br />
                        yang luar biasa hari ini.<br />
                    </h2>
                <div class="d-flex align-items-center justify-content-center">
                    <p class="text-align text-white fw-bold mb-5">
                    it is a long established fact that a reader will be<br />
                    when looking at is layout  </p> 
                </div>

                
                    <img class="buletan-oren"
                        src="assets/images/1.png"
                        alt="Log In"
                        class="img-fluid kadal"
                    />
                    <img class="buletan-hijau"
                        src="assets/images/elipse.png"
                        alt="Log In"
                        class="img-fluid"
                    />
            </div>

          <div class="col-md-6 sign-up-right justify-content-center">

              <h1>👋 </h1>
              <h4 class="mb-3 fw-bold">Selamat datang kembali!</h4>
              <h6 class="mb-5">Mari membuat sesuatu yang hebat</h6>

            <form>

              <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  aria-describedby="emailHelp"
                  placeholder="Enter your email"
                />
              </div>

              <div class="mb-3">
                <label for="password" class="form-label fw-bold"
                  >Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  placeholder="Enter your password"
                />
              </div>

              <a href="/forget" class="forgot-pass">Forgot password?</a>
              
              <button
                type="submit"
                class="btn btn-primary btn-login-form fw-bold"
              >
                Masuk
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
              Tidak punya akun?
              <a href="register" class="text-login fw-bold">Buat Akun</a>
            </p>
            </div>
          </div>
        </div>
      </div>
    </section>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

   
  </body>
</html>