@extends('layouts.admin')

@section('page_title')
Lander.v2 - Bootstrap WebApp & Dashboard
@endsection

@section('asset_css')
        <link rel="stylesheet" href="/plugins/jqvmap/css/jqvmap.css">
@endsection

@section('asset_css_theme')
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/jqvmap/js/jquery.vmap.js"></script>
        <script type="text/javascript" src="/javascript/backend/maps/vector.js"></script>
@endsection

@section('content')
            <div class="container-fluid">

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START panel -->
                        <div class="panel panel-default overflow-hidden">
                            <div class="panel-heading">
                                <h3 class="panel-title">World map</h3>
                            </div>
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body np" id="world-map" style="height:400px;"></div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                            <!-- Loading indicator -->
                            <div class="indicator show"><span class="spinner spinner16"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Continents - Asia</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body" id="map-asia" style="height:300px;"></div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                            <!-- Loading indicator -->
                            <div class="indicator show"><span class="spinner spinner16"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Continents - Europe</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body" id="map-europe" style="height:300px;"></div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                            <!-- Loading indicator -->
                            <div class="indicator show"><span class="spinner spinner16"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Continents - Australia</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body" id="map-australia" style="height:300px;"></div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                            <!-- Loading indicator -->
                            <div class="indicator show"><span class="spinner spinner16"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Continents - Africa</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body" id="map-africa" style="height:300px;"></div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                            <!-- Loading indicator -->
                            <div class="indicator show"><span class="spinner spinner16"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Continents - North America</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body" id="map-north-america" style="height:300px;"></div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                            <!-- Loading indicator -->
                            <div class="indicator show"><span class="spinner spinner16"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Continents - South America</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body" id="map-south-america" style="height:300px;"></div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                            <!-- Loading indicator -->
                            <div class="indicator show"><span class="spinner spinner16"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START panel -->
                        <div class="panel panel-default overflow-hidden">
                            <div class="panel-heading">
                                <h3 class="panel-title">Markers</h3>
                            </div>
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body np" id="map-marker" style="height:600px;"></div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                            <!-- Loading indicator -->
                            <div class="indicator show"><span class="spinner spinner16"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->
            </div>
@endsection

@section('footer')
@endsection

