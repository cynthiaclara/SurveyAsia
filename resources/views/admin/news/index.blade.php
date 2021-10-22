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
          <h1>News</h1>
          <form action="{{ route('admin.news.store') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleFormControlInput1"
                class="form-label">Title</label>
              <input type="text" name="title" class="form-control"
                id="exampleFormControlInput1" placeholder="title">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1"
                class="form-label">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1"
                name="description" id="" cols="10" rows="3"
                placeholder="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">+ Create new
              news</button>
          </form>
          <div class="row">
            <div class="col">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">status</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php $i = 1; ?>
                    @foreach ($news as $item)
                      <th scope="row"><?= $i++ ?></th>
                      <td><?= $item->title ?></td>
                      <td>active</td>
                      <td>
                        <a
                          href="{{ route('admin.news.edit', $item->id) }}">edit</a>
                        <form
                          action="{{ route('admin.news.destroy', $item->id) }}"
                          method="post">
                          @method('delete')
                          @csrf
                          <button type="submit"
                            class="btn btn-danger">delete</button>
                        </form>
                      </td>
                  </tr>
                  @endforeach
                  <?php $i; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
