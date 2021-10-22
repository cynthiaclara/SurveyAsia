@extends('admin.layouts.base')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endsection

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-2 nopadding">
        @include('admin.component.sidebar')
      </div>
      <div class="col-10 nopadding">
        @include('admin.component.header')

        <div class="container mt-4">
          <div class="row">
            <div class="col">
              <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
              <p>Alamat KTP : {{ $user->profile->ktp_address }} <br>
                Alamat Sekarang : {{ $user->profile->address }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
