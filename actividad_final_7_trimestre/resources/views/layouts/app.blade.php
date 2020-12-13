<!DOCTYPE html>
<html lang="en" class="perfect-scrollbar-on"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Intranet.Red
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{{url('css/app.css')}}" rel="stylesheet" media="all">
    <script src="{{url('js/app.js')}}"></script>
<body class="">
<!-- Extra details for Live View on GitHub Pages -->
@include('layouts\componets\navbar')
<div class="wrapper">
@include('layouts\componets\sidebar')
@include('layouts\componets\aside')
<!-- contenido en general -->
    <div class="main-panel ps">
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card card-chart">
                        <div class="card-header ">
                            <div class="row">
                                <div class="col-sm-6 text-left">
                                    <h5 class="card-category">Total Shipments</h5>
                                    <h2 class="card-title">Performance</h2>
                                </div>
                                <div class="col-sm-6">
                                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                        <label class="btn btn-sm btn-primary btn-simple active" id="0">
                                            <input type="radio" name="options" checked="">
                                            <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Accounts</span>
                                            <span class="d-block d-sm-none">
                          <i class="tim-icons icon-single-02"></i>
                        </span>
                                        </label>
                                        <label class="btn btn-sm btn-primary btn-simple" id="1">
                                            <input type="radio" class="d-none d-sm-none" name="options">
                                            <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Purchases</span>
                                            <span class="d-block d-sm-none">
                          <i class="tim-icons icon-gift-2"></i>
                        </span>
                                        </label>
                                        <label class="btn btn-sm btn-primary btn-simple" id="2">
                                            <input type="radio" class="d-none" name="options">
                                            <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Sessions</span>
                                            <span class="d-block d-sm-none">
                          <i class="tim-icons icon-tap-02"></i>
                        </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-area"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                <canvas id="chartBig1" width="753" height="220" class="chartjs-render-monitor" style="display: block; width: 753px; height: 220px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('content')
<!--final contenido general de las tablasytodo lo que se ve dentro -->
@include('layouts\componets\footer')
<!-- Place this tag in your head or just before your close body tag. -->
<!-- Sharrre libray -->

</body>
</html>
