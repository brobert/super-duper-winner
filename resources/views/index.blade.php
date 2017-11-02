extends('layouts.blank')

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
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold"><span class="figure"><i class="ico-home2"></i></span> Dashboards {{ snake_case('ala.ma.kota')}}</h4>
                    </div>
                </div>
                <!-- Page Header -->

                <div class="row">
                    <!-- START Left Side -->
                    <div class="col-md-9">

                        <!-- Website States -->
                            @include('landerv2/partials/dashboard_web_statistics')
                        <!--/ Website States -->

                        <!-- Browser Breakpoint -->
                            @include('landerv2/partials/dahsboard_browser_breakpoints')
                        <!-- Browser Breakpoint -->
                    </div>
                    <!--/ END Left Side -->

                    <!-- START Right Side -->
                    <div class="col-md-3">
                        <div class="panel panel-minimal">
                            @include('landerv2/partials/dahsboard_today_income')

                            @include('landerv2/partials/dahsboard_weather')

                            @include('landerv2/partials/dashboard_traffic')

                        </div>
                    </div>
                    <!--/ END Right Side -->
                </div>
            </div>
@endsection

@section('footer')
@endsection

