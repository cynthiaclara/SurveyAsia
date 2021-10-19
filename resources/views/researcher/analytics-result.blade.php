@extends('layouts.footer')
@extends('layouts.base')
@extends('researcher.layouts.breadcrumb')
@extends('researcher.layouts.navbar2')

@section('content')

{{-- Analytics result --}}
<section class="analytics-result py-5" id="analytics-result">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="border rounded p-3">
                    <p class="text-muted m-0">Judul Survei</p>
                    <h6>Survey terhadap belanja online</h6>
                    <hr>
                    <p class="text-muted m-0">Jenis Survei</p>
                    <h6>Member Annual Personal</h6>
                    <hr>
                    <p class="text-muted m-0">Jumlah Responden</p>
                    <h6>20/100 Responden</h6>
                </div>
                <div class="mt-3">
                    <button class="btn btn-default text-light w-100" id="btnDownload" type="button">
                        <span>
                            Download Result
                            <i class="fas fa-download ms-5"></i>
                        </span>
                    </button>
                </div>
            </div>
            <div class="col">
                <div id="loadingIndicator">
                    <span>
                        <div id="loading">
                            <strong>loading...</strong>
                        </div>
                    </span>
                </div>
                <div id="surveyElement" style="display:inline-block;width:100%;"></div>
                <div id="surveyResult" class="border rounded"></div>
            </div>
        </div>
    </div>
</section>
{{-- End Analytics result --}}

@endsection