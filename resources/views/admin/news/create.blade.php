@extends('admin.layouts.base')

@section('css')
<style>
    body {
        background-color: #F7FAFC;
    }
</style>

<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endsection


@section('content')
<div class="container-fluid">
    <div class="row border">
        <div class="col-2 nopadding">
            @include('admin.component.sidebar')
        </div>
        <div class="col-10 nopadding">
            @include('admin.component.header')

            <div class="container mt-2" style="height: 650px;">
                <div class="row bg-white px-4 py-5">
                    <h3>Create new post</h3>
                    <div class="col-6">
                            <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Title</label>
                                    <input type="text" class="form-control  @error('title') is-invalid @enderror" id="judul" name="title">
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror    
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="tanggal" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal">
                                </div> --}}
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="deskripsi" rows="3" name="description"></textarea>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Upload Foto</label>
                                    <input type="file" class="form-control" id="foto" name="img">
                                </div>
                                <div class="text-center mt-5 pt-3">
                                    <button type="submit" class="btn bg-special-blue text-white mx-auto px-lg-5">Buat News</button>
                                </div>
                        </div>
                    </form>

                        <div class="col-6">
                                {{-- <div class="mb-3">
                                    <label for="foto" class="form-label">Upload Foto</label>
                                    <input type="file" class="form-control" id="foto" name="dsadas">
                                </div>
                                <div class="mb-3">
                                    <label for="jam-publish" class="form-label">Jam Publish</label>
                                    <input type="time" class="form-control" id="jam-publish">
                                </div>

                                <div class="text-center mt-5 pt-3">
                                    <button type="submit" class="btn bg-special-blue text-white mx-auto px-lg-5">Buat News</button>
                                </div> --}}
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection