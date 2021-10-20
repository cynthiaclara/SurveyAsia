@extends('admin.layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endsection

@section('content')
<div id="bg-login">
</div>

    <div class="container col-lg-3 col-12 bg-white position-absolute top-50 start-50 translate-middle px-5" id="cont-login">
        <img src="{{ asset('assets/img/surveyasia.png') }}" alt="" width="" class="img-fluid">
               
        <form action="" method="">
            <label for="email" class="text-secondary">Email</label>
            <input type="text" class="form-control bg-light mb-3 py-2 border-r-sedang fw-light" placeholder="Email Address" name="email">
            <label for="password" class="text-secondary">Password</label>
            <input type="password" class="form-control bg-light mb-3 border-r-sedang fw-light" placeholder="PASSWORD" name="password">

            <button type="submit" class="btn w-100 text-white border-r-sedang py-2 shadow" style="background-color: #3751FF;">Masuk</button>
        </form>

    </div>


@endsection