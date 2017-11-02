@extends('layouts.admin')

@section('page_title')
Lander.v2 - Dashboard
@endsection

@section('asset_css')
        <link rel="stylesheet" href="/plugins/selectize/css/selectize.css">
        <link rel="stylesheet" href="/plugins/flot/css/flot.css">
@endsection

@section('asset_css_theme')
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/selectize/js/selectize.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.resize.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.categories.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.time.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.tooltip.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.spline.js"></script>
        <script type="text/javascript" src="/javascript/backend/pages/dashboard-v1.js"></script>
@endsection

@section('content')
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-3">
                        <!-- START Panel pricing -->
                        <div class="panel panel-default">
                            <a href="{{route('landerv2')}}">
                                <!-- panel heading -->
                                <div class="panel-heading text-center pa15" style="min-height:100px;">
                                    <h4 class="semibold mt0">
                                        Landerv2
                                    </h4>
                                </div>
                                <!-- panel heading -->
                                <!-- panel body -->
                                <div class="panel-body text-center" style="margin-top:-50px;">
                                    <img class="img-circle img-bordered" src="/image/logo/logo-figure-inverse.png" alt="" width="75px" height="75px">
                                </div>
                                <!--/ panel body -->
                            </a>
                        </div>
                        <!--/ END Panel pricing -->
                    </div>

                    <div class="col-md-3">
                        <!-- START Panel pricing -->
                        <div class="panel panel-default">
                            <a href="{{route('npk')}}">
                                <!-- panel heading -->
                                <div class="panel-heading text-center pa15" style="min-height:100px;">
                                    <h4 class="semibold mt0">
                                        Npk
                                    </h4>
                                </div>
                                <!-- panel heading -->
                                <!-- panel body -->
                                <div class="panel-body text-center" style="margin-top:-50px;">
                                    <img class="img-circle img-bordered" src="/image/logo/npk.png" alt="" width="75px" height="75px">
                                </div>
                                <!--/ panel body -->
                            </a>
                        </div>
                        <!--/ END Panel pricing -->
                    </div>

                </div>
            </div>
@endsection

@section('footer')
@endsection

