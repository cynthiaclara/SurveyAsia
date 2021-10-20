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
              <table class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Verified At</th>
                    <th>Role</th>
                    <th>Subscription</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    <tr>
                      <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                      <td>{{ $user->username }}</td>
                      <td>{{ $user->email }}</td>
                      @if ($user->email_verified_at != null)
                        <td>{{ $user->email_verified_at }}</td>
                      @else
                        <td>{{ __('Not Verified') }}</td>
                      @endif
                      @if ($user->role_id != null && $user->role != null)
                        <td>{{ $user->role->name }}</td>
                      @else

                        <td>No Role Selected</td>
                      @endif
                      @if ($user->subscription_id != null && $user->subscription != null)
                        <td>{{ $user->subscription->name }}</td>
                      @else
                        <td>{{ __('No Subscription') }}</td>
                      @endif
                      <td>
                        <form class="inline-block"
                          action="{{ route('admin_users.destroy', $user->id) }}"
                          method="POST"
                          onsubmit="return confirm('Are you sure?');">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token"
                            value="{{ csrf_token() }}">
                          <input type="submit" class="btn btn-sm btn-danger"
                            value="Delete">
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
