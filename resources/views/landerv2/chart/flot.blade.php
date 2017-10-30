@extends('layouts.admin')

@section('page_title')
Lander.v2 - Charts
@endsection

@section('asset_css')
    <link rel="stylesheet" href="{{URL::asset('/plugins/flot/css/flot.css')}}">
@endsection

@section('asset_js')
    <script type="text/javascript" src="/javascript/pace.min.js"></script>
    <script type="text/javascript" src="/plugins/flot/js/jquery.flot.js"></script>
    <script type="text/javascript" src="/plugins/flot/js/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="/plugins/flot/js/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="/plugins/flot/js/jquery.flot.categories.js"></script>
    <script type="text/javascript" src="/plugins/flot/js/jquery.flot.time.js"></script>
    <script type="text/javascript" src="/plugins/flot/js/jquery.flot.fillbetween.js"></script>
    <script type="text/javascript" src="/plugins/flot/js/jquery.flot.stack.js"></script>
    <script type="text/javascript" src="/plugins/flot/js/jquery.flot.tooltip.js"></script>
    <script type="text/javascript" src="/plugins/flot/js/jquery.flot.spline.js"></script>
    <script type="text/javascript" src="/javascript/backend/charts/flot.js"></script>
@endsection


@section('content')
<!-- START Template Container -->
<div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title semibold">Flot chart </h4>
            <!-- {{$view}} | {{$request->path()}} -->
        </div>
    </div>
    <!-- Page Header -->

    <!-- START row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <!-- panel heading/header -->
                <div class="panel-heading">
                    <div class="panel-title">Bar chart</div>
                    <!-- panel toolbar -->
                    <div class="panel-toolbar text-right">
                        <!-- option -->
                        <div class="option">
                            <button class="btn" data-toggle="panelrefresh"><i class="reload"></i></button>
                            <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                            <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                        </div>
                        <!--/ option -->
                    </div>
                    <!--/ panel toolbar -->
                </div>
                <!--/ panel heading/header -->
                <!-- panel body with collapse capabale -->
                <div class="panel-collapse pull out">
                    <div class="panel-body">
                        <!-- Loading indicator -->
                        <div class="indicator show"><span class="spinner"></span></div>
                        <!--/ Loading indicator -->
                        <div class="chart mt10" id="chart-bar" style="height:250px;"></div>
                    </div>
                </div>
                <!--/ panel body with collapse capabale -->
            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel panel-default">
                <!-- panel heading/header -->
                <div class="panel-heading">
                    <div class="panel-title ellipsis">Bar chart - Stacked</div>
                    <!-- panel toolbar -->
                    <div class="panel-toolbar text-right">
                        <!-- option -->
                        <div class="option">
                            <button class="btn" data-toggle="panelrefresh"><i class="reload"></i></button>
                            <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                            <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                        </div>
                        <!--/ option -->
                    </div>
                    <!--/ panel toolbar -->
                </div>
                <!--/ panel heading/header -->
                <!-- panel body with collapse capabale -->
                <div class="panel-collapse pull out">
                    <div class="panel-body">
                        <!-- Loading indicator -->
                        <div class="indicator show"><span class="spinner"></span></div>
                        <!--/ Loading indicator -->
                        <div class="chart mt10" id="chart-bar-stacked" style="height:250px;"></div>
                    </div>
                </div>
                <!--/ panel body with collapse capabale -->
            </div>
        </div>
    </div>
    <!--/ END row -->

    <!-- START row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <!-- panel heading/header -->
                <div class="panel-heading">
                    <div class="panel-title">Area chart</div>
                    <!-- panel toolbar -->
                    <div class="panel-toolbar text-right">
                        <!-- option -->
                        <div class="option">
                            <button class="btn" data-toggle="panelrefresh"><i class="reload"></i></button>
                            <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                            <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                        </div>
                        <!--/ option -->
                    </div>
                    <!--/ panel toolbar -->
                </div>
                <!--/ panel heading/header -->
                <!-- panel body with collapse capabale -->
                <div class="panel-collapse pull out">
                    <div class="panel-body">
                        <!-- Loading indicator -->
                        <div class="indicator show"><span class="spinner"></span></div>
                        <!--/ Loading indicator -->
                        <div class="chart mt10" id="chart-area" style="height:250px;"></div>
                    </div>
                </div>
                <!--/ panel body with collapse capabale -->
            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel panel-default">
                <!-- panel heading/header -->
                <div class="panel-heading">
                    <div class="panel-title">Line chart</div>
                    <!-- panel toolbar -->
                    <div class="panel-toolbar text-right">
                        <!-- option -->
                        <div class="option">
                            <button class="btn" data-toggle="panelrefresh"><i class="reload"></i></button>
                            <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                            <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                        </div>
                        <!--/ option -->
                    </div>
                    <!--/ panel toolbar -->
                </div>
                <!--/ panel heading/header -->
                <!-- panel body with collapse capabale -->
                <div class="panel-collapse pull out">
                    <div class="panel-body">
                        <!-- Loading indicator -->
                        <div class="indicator show"><span class="spinner"></span></div>
                        <!--/ Loading indicator -->
                        <div class="chart mt10" id="chart-line" style="height:250px;"></div>
                    </div>
                </div>
                <!--/ panel body with collapse capabale -->
            </div>
        </div>
    </div>
    <!--/ END row -->

    <!-- START row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <!-- panel heading/header -->
                <div class="panel-heading">
                    <div class="panel-title">Area chart - Spline</div>
                    <!-- panel toolbar -->
                    <div class="panel-toolbar text-right">
                        <!-- option -->
                        <div class="option">
                            <button class="btn" data-toggle="panelrefresh"><i class="reload"></i></button>
                            <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                            <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                        </div>
                        <!--/ option -->
                    </div>
                    <!--/ panel toolbar -->
                </div>
                <!--/ panel heading/header -->
                <!-- panel body with collapse capabale -->
                <div class="panel-collapse pull out">
                    <div class="panel-body">
                        <!-- Loading indicator -->
                        <div class="indicator show"><span class="spinner"></span></div>
                        <!--/ Loading indicator -->
                        <div class="chart mt10" id="chart-area-spline" style="height:250px;"></div>
                    </div>
                </div>
                <!--/ panel body with collapse capabale -->
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <!-- panel heading/header -->
                <div class="panel-heading">
                    <div class="panel-title">Line chart - Spline</div>
                    <!-- panel toolbar -->
                    <div class="panel-toolbar text-right">
                        <!-- option -->
                        <div class="option">
                            <button class="btn" data-toggle="panelrefresh"><i class="reload"></i></button>
                            <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                            <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                        </div>
                        <!--/ option -->
                    </div>
                    <!--/ panel toolbar -->
                </div>
                <!--/ panel heading/header -->
                <!-- panel body with collapse capabale -->
                <div class="panel-collapse pull out">
                    <div class="panel-body">
                        <!-- Loading indicator -->
                        <div class="indicator show"><span class="spinner"></span></div>
                        <!--/ Loading indicator -->
                        <div class="chart mt10" id="chart-line-spline" style="height:250px;"></div>
                    </div>
                </div>
                <!--/ panel body with collapse capabale -->
            </div>
        </div>
    </div>
    <!--/ END row -->

    <!-- START row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <!-- panel heading/header -->
                <div class="panel-heading">
                    <div class="panel-title ellipsis"><i class="ico-people mr5"></i> Height in centimeters of individuals</div>
                    <!-- panel toolbar -->
                    <div class="panel-toolbar text-right">
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default">Month</button>
                            <button type="button" class="btn btn-default">Year</button>
                        </div>
                    </div>
                    <!--/ panel toolbar -->
                </div>
                <!--/ panel heading/header -->
                <!-- panel body -->
                <div class="panel-body">
                    <div class="chart mt10" id="chart-fillbetween" style="height:250px;"></div>
                </div>
                <!--/ panel body -->
            </div>
        </div>
    </div>
    <!--/ END row -->

    <!-- START row -->
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <!-- panel heading/header -->
                <div class="panel-heading">
                    <div class="panel-title"><i class="ico-compass2 mr5"></i> Geolocation</div>
                    <!-- panel toolbar -->
                    <div class="panel-toolbar text-right">
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default">Month</button>
                            <button type="button" class="btn btn-default">Year</button>
                        </div>
                    </div>
                    <!--/ panel toolbar -->
                </div>
                <!--/ panel heading/header -->
                <!-- panel body -->
                <div class="panel-body">
                    <!-- Loading indicator -->
                    <div class="indicator show"><span class="spinner"></span></div>
                    <!--/ Loading indicator -->
                    <div class="chart mt10" id="chart-pie1" style="height:200px;"></div>
                </div>
                <!--/ panel body -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <!-- panel heading/header -->
                <div class="panel-heading">
                    <div class="panel-title"><i class="ico-compass2 mr5"></i> Geolocation</div>
                    <!-- panel toolbar -->
                    <div class="panel-toolbar text-right">
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default">Month</button>
                            <button type="button" class="btn btn-default">Year</button>
                        </div>
                    </div>
                    <!--/ panel toolbar -->
                </div>
                <!--/ panel heading/header -->
                <!-- panel body -->
                <div class="panel-body">
                    <!-- Loading indicator -->
                    <div class="indicator show"><span class="spinner"></span></div>
                    <!--/ Loading indicator -->
                    <div class="chart mt10" id="chart-pie2" style="height:200px;"></div>
                </div>
                <!--/ panel body -->
            </div>
        </div>
    </div>
    <!--/ END row -->
</div>
<!--/ END Template Container -->
@endsection