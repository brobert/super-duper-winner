@extends('layouts.admin')

@section('page_title')
Lander.v2 - Bootstrap WebApp & Dashboard
@endsection

@section('asset_css')
    <link rel="stylesheet" href="/plugins/ladda/css/ladda.css">
@endsection

@section('asset_css_theme')
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/parsley/js/parsley.js"></script>
        <script type="text/javascript" src="/plugins/ladda/js/vendor/spin.js"></script>
        <script type="text/javascript" src="/plugins/ladda/js/ladda.js"></script>
        <script type="text/javascript" src="/javascript/backend/forms/ajax.js"></script>
@endsection

@section('content')
            <div class="container-fluid">
                <!-- START row -->
                <div class="row">
                    <!-- Left / Top Side -->
                    <div class="col-lg-3">
                        <!-- tab menu -->
                        <ul class="list-group list-group-tabs">
                            <li class="list-group-item {{ old('scope', 'profile') === 'profile'? 'active': ''}}">
                                <a href="#profile" data-toggle="tab"><i class="ico-user2 mr5"></i> Profile</a>
                            </li>
                            <li class="list-group-item {{ old('scope', 'profile') === 'password'? 'active': ''}}">
                                <a href="#password" data-toggle="tab"><i class="ico-key2 mr5"></i> Password</a>
                            </li>
                        </ul>
                        <!-- tab menu -->

                        <hr><!-- horizontal line -->

                        <!-- figure with progress -->
                        <ul class="list-table">
                            <li style="width:70px;">
                                <img class="img-circle img-bordered" src="/image/avatar/avatar7.jpg" alt="" width="65px">
                            </li>
                            <li class="text-left">
                                <h5 class="semibold ellipsis mt0">{{$user->full_name()}}</h5>
                            </li>
                        </ul>
                        <!--/ figure with progress -->

                        <hr><!-- horizontal line -->

                    </div>
                    <!--/ Left / Top Side -->

                    <!-- Left / Bottom Side -->
                    <div class="col-lg-9">
                        <!-- START Tab-content -->
                        <div class="tab-content">

                            <!-- tab-pane: password -->
                            @include('account.partials.form_password')
                            <!--/ tab-pane: password -->


                            <!-- tab-pane: profile -->
                            @include('account.partials.form_profile')
                            <!-- tab-pane: profile -->


                        </div>
                        <!--/ END Tab-content -->
                    </div>
                    <!--/ Left / Bottom Side -->
                </div>
                <!--/ END row -->
            </div>
@endsection

@section('footer')
@endsection

