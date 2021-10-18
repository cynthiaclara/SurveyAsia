@extends('layouts.base')
@section('content')

  <div class="container p-4">
    <h1>Laravel Playground</h1>
    <h3>test user roles and permissions</h3>
    <p>using policies classes</p>

    <p>Current user = {{ $user->name }}</p>
    <p>Can update other user ?</p>
    @can('update', User::class)
      <p>Yes</p>
    @else
      <p>No</p>
    @endcan
    <p>Can update user itself ?</p>
    @can('update', $user)
      <p>Yes</p>
    @else
      <p>No</p>
    @endcan
    <p>What role this user assigned ?</p>
    <p>{{ $user->role->name }}</p>
  </div>

@endsection
