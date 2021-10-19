@extends('layouts.footer')
@extends('layouts.base')
@extends('respondent.layouts.navbar')

@section('content')

<h3 class="pt-5 ms-5 fw-bold">My Account</h3>

{{-- User Profile --}}
<section class="user-profile pt-4 pb-5 mx-5" id="user-profile">
  <div class="row">
    <div class="col-auto">
      <div class="shadow p-4 me-4" style="border-radius: 16px;">
        <h5>Personal</h5>
        <a href="/profile" class="link-dark text-decoration-none">
          <p class="mt-3 ms-3"><i class="fas fa-user fa-fw"></i> Profile</p>
        </a>
        <a href="#" class="link-dark text-decoration-none">
          <p class="mt-3 ms-3"><i class="fas fa-ticket-alt fa-fw"></i> Reward
            Point</p>
        </a>
        <a href="#" class="link-dark text-decoration-none">
          <p class="mt-3 ms-3"><i class="fas fa-wallet fa-fw"></i>
            Transaction History</p>
        </a>
        <a href="#" class="link-dark text-decoration-none">
          <p class="mt-3 ms-3"><i class="fas fa-tv fa-fw"></i> Video Tutorial
          </p>
        </a>
        <a href="#" class="link-dark text-decoration-none">
          <p class="mt-3 ms-3"><i class="fas fa-newspaper fa-fw"></i> News
          </p>
        </a>
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt fa-fw"></i>
            Logout</button>
        </form>
      </div>
    </div>
    <div class="col shadow pt-4 pb-5 px-5" style="border-radius: 16px;">
      {{-- <img src="/assets/img/header_profile.svg" alt="Header" width="100%"> --}}
      <div class="row">
        <div class="col-2 col-md-3">
          <img src="/assets/img/prof_pic.png" alt="Profile Picture" width="110" class="d-block mb-2 ms-3">
          <a href="#" class="link-default text-decoration-none">Change</a>
          |
          <a href="#" class="link-default text-decoration-none">Delete</a>
        </div>
        <div class="col">
          <h3>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h3>

          @if (Auth::user()->subscription_id != null)
          <p>Show subscription name</p>
          @else
          <p>Basic (Free) Account</p>
          @endif

          <a href="#" class="btn-sm btn-orange text-white text-decoration-none" role="button">Upgrade</a>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-2">
          <p class="fs-5">Nama</p>
        </div>
        <div class="col">
          <p>{{ Auth::user()->name }}</p>
        </div>
        <div class="col-md-1 text-end">
          <a href="#" class="link-default">Edit</a>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-2">
          <p class="fs-5">Username</p>
        </div>
        <div class="col">
          <p>davidc</p>
        </div>
        <div class="col-md-1 text-end">
          <a href="#" class="link-default">Edit</a>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-2">
          <p class="fs-5">Password</p>
        </div>
        <div class="col">
          <p>********</p>
        </div>
        <div class="col-md-1 text-end">
          <a href="#" class="link-default">Edit</a>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-2">
          <p class="fs-5">Email</p>
        </div>
        <div class="col">
          <p>{{ Auth::user()->email }}</p>
          <div class="d-flex">
            @if (Auth::user()->email_verified_at != null)
            <p class="text-primary me-3">Verified</p>
            @else
            <p class="text-orange me-3">Not Verified</p>
            <a href="#" class="link-default text-decoration-none">Resend
              Email</a>
            @endif
          </div>
        </div>
        <<<<<<< HEAD <div class="col-md-1 text-end">
          <a href="#" class="link-default">Edit</a>
      </div>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-2">
        <p class="fs-5">Bahasa</p>
        =======
        <div class="row mt-4">
          <div class="col-md-2">
            <p class="fs-5">Nama</p>
          </div>
          <div class="col">
            <p>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
            </p>
          </div>
          <div class="col-md-1 text-end">
            <a href="#" class="link-default">Edit</a>
          </div>
          <hr>
        </div>
        <div class="row">
          <div class="col-md-2">
            <p class="fs-5">Username</p>
          </div>
          <div class="col">
            <p>{{ Auth::user()->username }}</p>
          </div>
          <div class="col-md-1 text-end">
            <a href="#" class="link-default">Edit</a>
          </div>
          <hr>
          >>>>>>> 4ae8ace7dc36d1cbb24ca0056cfd6029e9d62328
        </div>
        <div class="col">
          <p>Indonesia</p>
        </div>
        <div class="col-md-1 text-end">
          <a href="#" class="link-default">Edit</a>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-2">
          <p class="fs-5">NIK</p>
        </div>
        <div class="col">
          <p>1234567891011121</p>
        </div>
        <div class="col-md-1 text-end">
          <a href="#" class="link-default">Edit</a>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-2">
          <p class="fs-5">No. Telp</p>
        </div>
        <div class="col">
          <p>081234567890</p>
        </div>
        <div class="col-md-1 text-end">
          <a href="#" class="link-default">Edit</a>
        </div>
        <hr>
      </div>
    </div>
  </div>
</section>
{{-- End User Profile --}}

@endsection