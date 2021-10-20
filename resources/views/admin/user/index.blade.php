@extends('layouts.base')

@section('content')

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
                <td>{{ $user->role->name }}</td>
                @if ($user->subscription_id != null && $user->subscription != null)
                  <td>{{ $user->subscription->name }}</td>
                @else
                  <td>{{ __('No Subscription') }}</td>
                @endif
                <td>
                  <form class="inline-block"
                    action="{{ route('admin_users.destroy', $user->id) }}"
                    method="POST" onsubmit="return confirm('Are you sure?');">
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


@endsection
