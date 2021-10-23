@extends('layouts.base')
@section('content')

  <div class="container p-4">
    <h1>My Playground</h1>
    <h3>test user roles and permissions</h3>
    <p>using policies classes</p>

    <p>Current user = {{ Auth::user()->first_name }}
      {{ Auth::user()->last_name }}</p>
    <p>Role = {{ Auth::user()->role->name }}</p>

    <div class="row">
      <div class="col">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Context</th>
              <th>Result</th>
            </tr>
          </thead>
          <tbody>
            @php
              $no = 1;
            @endphp
            @foreach ($results as $result)
              <tr>
                <td>{{ $no }}</td>
                <td>{{ $result['context'] }}</td>
                <td>{{ $result['result'] }}</td>
              </tr>
              @php
                $no++;
              @endphp
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>

@endsection
