@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Edit</h1>
                <form action="{{ route('news.update', $news->id) }}" method="post">
                    @method('put')
                    @csrf
                    <input type="text" name="title" id="" class="form-control" value="{{ $news->title }}">
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>
    </div>
@endsection