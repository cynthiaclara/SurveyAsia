@extends('layouts.footer')
@extends('layouts.base')
@extends('researcher.layouts.breadcrumb')
@extends('researcher.layouts.navbar2')

@section('content')

{{-- Customize Diagram --}}
<section class="customize-diagram py-5" id="customize-diagram">
    <div class="container">
        <div class="border rounded p-3">
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
            <h1 style="text-align: center;">Customer Satisfaction</h1>
            <table style="margin-left:auto;margin-right:auto">
                <tr>
                    <td>
                        <div class="demo-container">
                            <div id="zoomedChart"></div>
                            <div id="rangeSelector"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="demo-container">
                            <div id="pie" style="height: 440px; padding-top: 50px;"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="demo-container">
                            <div id="chart3" style="padding-top: 50px;"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="demo-container" ng-app="DemoApp" ng-controller="DemoController">
                            <div id="chart" dx-chart="chartOptions" style="height: 440px; padding-top: 50px;">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="demo-container">
                            <div id="chart5" style="padding-top: 50px;"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="demo-container">
                            <div id="pie6" style="padding-top: 50px;"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="demo-container">
                            <div id="gauge" style="height: 440px; padding-top: 50px;"></div>
                        </div>
                        <div id="grid" style="width: 440px; margin-left:auto;margin-right:auto"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="demo-container">
                            <div id="chart8" style="padding-top: 50px;"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <div id="container9" style="height: 440px; padding-top: 50px;"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="demo-container">
                            <div id="pyramid" style="width: 800px; padding-top: 50px;"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="demo-container">
                            <div id="chart11" style="padding-top: 50px;"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="padding-top: 20px;">
                            <canvas id="myChartgap"></canvas>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</section>
{{-- End Customize Diagram --}}

@endsection