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
                <div class="border rounded p-3">
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
        </div>
    </div>
</section>
{{-- End Analytics result --}}

@endsection