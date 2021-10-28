@extends('layouts.main')
@section('content')
<div class="col-12 col-md">
<form action="{{route('updateprofile',$profile->id)}}" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token()}}">
<div class="form-group">
<label for="first_name">Nama Depan</label>
<input type="text" class="form-control" id="first_name" name="first_name" value="{{$users_profiles->first_name}}"/>
</div>
<div class="form-group">
<label for="last_name">Nama Belakang</label>
<input type="text" class="form-control" id="last_name" name="last_name" value="{{$users_profiles->last_name}}"/>
</div>
<div class="form-group">
<label for="username">Username</label>
<input type="text" class="form-control" id="username" name="username" value="{{$users_profiles->username}}"/>
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="text" class="form-control" id="email" name="email" value="{{$users_profiles->email}}"/>
</div>
<div class="form-group">
<label for="telp">Telepon</label>
<input type="text" class="form-control" id="telp" name="telp" value="{{$users_profiles->telp}}"/>
</div>

<button type="submit" class="btn btn-primary">Update Profile</button>
</form>
</div>
@endsection