@extends('layouts.footer')
@extends('layouts.base')
@extends('researcher.layouts.breadcrumb')
@extends('researcher.layouts.navbar2')

@section('content')

{{-- Customize Diagram --}}
<section class="customize-diagram py-5" id="customize-diagram">
    <div class="container">
        <div id="loadingIndicator">
            <span>
                <div id="loading">
                    <strong>loading...</strong>
                </div>
            </span>
        </div>
        <div id="surveyElement" style="display:inline-block;width:100%;"></div>
        <div class="d-flex justify-content-end mb-3">
            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                    data-bs-display="static" aria-expanded="false">
                    Customize
                </button>
                <ul class="dropdown-menu dropdown-menu-lg-end p-3">
                    <li>
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Bar Chart
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Pie Chart
                                    </label>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="surveyResult" class="border rounded"></div>
    </div>
</section>
{{-- End Customize Diagram --}}

@endsection