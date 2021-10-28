<?php
   // dd($profile);
   $img = $users_profiles->photo;
   if(is_null($img)){
       $img = 'noimage.png';
   } 
   $telp = $users_profiles->telp;


?>

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
        <a href="/survey/history/change-point" class="link-dark text-decoration-none">
          <p class="mt-3 ms-3"><i class="fas fa-ticket-alt fa-fw"></i> Reward
            Point</p>
        </a>
        <a href="#" class="link-dark text-decoration-none">
          <p class="mt-3 ms-3"><i class="fas fa-wallet fa-fw"></i>
            Transaction History</p>
        </a>
        <a href="#" class="link-dark text-decoration-none">
          <p class="mt-3 ms-3"><i class="fas fa-tv fa-fw"></i> Tutorial
          </p>
        </a>
        <a href="/news" class="link-dark text-decoration-none">
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
    <div class="col-12 col-md">
<div class="flash-message">
@foreach(['alert-danger', 'alert-warning','alert-success','alert-info'] as $alert)
@if(Session::has($alert))
<p class="alert {{$alert}}">{{Session::get($alert)}}</p>
@endif
@endforeach
</div>
</div>
<div class="container emp-profile">
            <form method="post" enctype="multipart/form-data" id="formgantiphoto" action="{{route('simpanphoto')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <input type="hidden" name="user_id" value="{{ $users_profiles->user_id }}"/>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{asset('images/' . $img)}}" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Ganti Photo
                                <input type="file" name="photoprofile" id="photoprofile"/>
                            </div>
                        </div>
                    </div>
          |

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
      <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="{{asset('user/editprofile/' . $user->id)}}" class="profile-edit-btn">Edit Profile</a>
                    </div>
  </div>
      <div class="row mt-4">
        <div class="col-md-2">
          <p class="fs-5">Nama</p>
        </div>
        <div class="col">
          <p>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
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
      
        <hr>
      </div>

      <div class="row">
        <div class="col-md-2">
          <p class="fs-5">No. Telp</p>
        </div>
        <div class="col">
        <p>{{$telp}}</p>
        </div>
      
        <hr>
      </div>
    </div>
  </div>
</section>
{{-- End User Profile --}}

@endsection
@section('js')
<script>
$(document).ready(function(){
  $('#photoprofile').change(function(){
    $('#formgantiphoto').submit();
  });
  $('#formgantiphoto').submit(function(e){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        type:'post',
        url: "{{ url('user/profile/simpanphoto')}}",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        dataType:'json',
        success: (data) =>{
            this.reset();
            //alert("Photo berhasil diganti");
            setTimeout(function(){
                location.reload();
            }, 3000);
        },
        error: function(data){
            console.log(data);
        }
    });
  });
});
</script>
@endsection
