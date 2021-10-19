@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="">
            <h1 class="mr-2">News</h1>
            <form action="{{ route('news.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="title">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" id="" cols="10" rows="3" placeholder="description"></textarea>
                  </div>
                <button type="submit" class="btn btn-primary">+ Create new news</button>
            </form>
        </div>
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
                            @foreach($news as $item)
                            <th scope="row"><?= $i++; ?></th>
                                <td><?= $item->title ?></td>
                                <td>active</td>
                                <td>
                                    <a href="{{ route('news.edit', $item->id) }}">edit</a>
                                    <form action="{{ route('news.destroy', $item->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">delete</button>
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
@endsection