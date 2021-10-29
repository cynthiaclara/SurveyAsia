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
                <div class="dropdown mt-3">
                    <button class="btn btn-default text-light w-100" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Download Result
                        <i class="fas fa-download ms-5"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-file-pdf fa-fw"></i> PDF</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-file-csv fa-fw"></i> CSV</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-file-excel fa-fw"></i> Excel</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-file-powerpoint fa-fw"></i> Power
                                Point</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-print fa-fw"></i> Print</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
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