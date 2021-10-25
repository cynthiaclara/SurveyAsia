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

        <div class="container pt-4">
          <h1>Admin Dashboard</h1>
        </div>
      </div>
    </div>
  </div>


@endsection
