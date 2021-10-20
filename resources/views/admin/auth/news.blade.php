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

                    {{-- LIST USER --}}
                        <div class="position-relative input-group align-items-center" style="width: 15%">
                            <input type="text" class="form-control rounded-pill py-2 text-center" placeholder="Search everything" aria-label="search" aria-describedby="basic-addon1" style="font-size: 12px">
                            <a href="#">
                                <i class="position-absolute top-50 start-0 translate-middle-y bi bi-search p-2 ms-1 text-secondary" style="z-index: 999;"></i>
                            </a>
                        </div>

                    <table class="table align-middle" id="table-news">
                        <thead>
                            <tr>
                                <td scope="col">Title</td>
                                <td scope="col">Status</td>
                                <td scope="col">Stats</td>
                                <td class="text-end">
                                    <button type="button" class="btn bg-special-blue text-white">
                                        <i class="bi bi-vector-pen me-"></i>  
                                        Add New
                                    </button>
                                </td>
                            </tr>
                        </thead>
                        <tbody>

                            {{-- LOOPING DATA --}}
                            @for ($i = 0; $i < 5; $i++)
                                        
                            <tr style="background-color: #F7FAFC;">
                                <td scope="col" class="py-4 ps-3">
                                    <h6 class="fw-bold" style="color: #2A4365">Design: A Survival Guide for Beginners</h6>
                                    <span class="d-block text-secondary" style="font-size: 13px">Posted 3 days ago</span>
                                </td>
                                <td scope="col">
                                    <div class="text-published rounded-pill text-center w-75">Published</div>
                                </td>
                                <td scope="col">
                                    <span class="fw-bold">120</span> 
                                    views
                                    <i class="bi bi-arrow-up-circle text-success"></i>
                                </td>
                                <td scope="col" class="text-end pe-3">
                                    <a href="#" role="button" id="dropdown-manage-news" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots fs-3 text-secondary"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown-manage-news">
                                        <li><a class="dropdown-item" href="#">Edit File</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="return confirm('Apakah kamu yakin ingin menghapus?')">Delete File</a></li>
                                    </ul>
                                </td>
                                </tr>

                            @endfor
                        </tbody>
                    </table>
                    {{-- END OF LIST USER --}}
                
                
                    {{-- PAGINATION --}}
                    <nav aria-label="Page navigation example">
                        <ul class="pagination align-items-center">
                            <li class="me-3">Rows per page:</li>
                            <li class="me-5 opacity-75">
                                <select class="form-select" aria-label="size 3 select example">
                                    <option selected value="1">10</option>
                                    <option value="2">25</option>
                                    <option value="3">50</option>
                                    <option value="4">100</option>
                                </select>
                            </li>
                            <li class="me-3">
                                <span>1-8</span>
                                <span class="mx-1">of</span>
                                <span>1240</span>
                            </li>

                            <li class="page-item fs-2 me-2"> <a href="#" class="text-semi-light text-decoration-none">  &#60; </a> </li>
                            <li class="page-item fs-2 me-2"> <a href="#" class="text-semi-light text-decoration-none">  &#62; </a> </li>
                        </ul>
                    </nav>
                    {{-- END OF PAGINATION --}}
                </div>




            </div>
    </div>
</div>


@endsection
