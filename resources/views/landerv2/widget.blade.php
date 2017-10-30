@extends('layouts.admin')

@section('page_title')
Lander.v2 - Widgets
@endsection

@section('asset_css')
        <link rel="stylesheet" href="/plugins/owl/css/owl-carousel.css">
        <link rel="stylesheet" href="/plugins/flot/css/flot.css">
@endsection

@section('asset_css_theme')
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/owl/js/owl.carousel.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.resize.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.categories.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.time.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.tooltip.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.spline.js"></script>
        <script type="text/javascript" src="/javascript/backend/components/widget.js"></script>
@endsection

@section('content')
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold"><span class="figure"><i class="ico-tasks"></i></span> Stats & Widgets</h4>
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <!-- START Table layout -->
                        <div class="table-layout">
                            <div class="col-xs-7 widget panel">
                                <!-- Thumbnail -->
                                <div class="thumbnail">
                                    <!-- media -->
                                    <div class="media">
                                        <!-- indicator -->
                                        <div class="indicator"><span class="spinner"></span></div>
                                        <!--/ indicator -->
                                        <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background5.jpg" alt="Photo" height="100%">
                                    </div>
                                    <!--/ media -->
                                </div>
                                <!--/ Thumbnail -->
                            </div>
                            <div class="col-xs-5 widget panel">
                                <div class="panel-body text-center">
                                    <h4>Brisbane <br><small>Australia</small></h4>
                                    <h1 class="bold text-success">21°</h1>
                                    <h5 class="semibold text-muted">Hello Windy!</h5>
                                </div>
                            </div>
                        </div>
                        <!--/ END Table layout -->
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- Thumbnail -->
                            <div class="thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- indicator -->
                                    <div class="indicator"><span class="spinner"></span></div>
                                    <!--/ indicator -->
                                    <!-- meta -->
                                    <span class="meta top">
                                        <h3 class="semibold nm text-center">Rainy</h3>
                                        <p class="nm text-center">California</p>
                                        <h4 class="semibold nm text-center"><i class="ico-location6"></i> San Franscisco</h4>
                                    </span>
                                    <!--/ meta -->
                                    <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background9.jpg" alt="Photo" height="100%">
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ Thumbnail -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <!-- Nav section -->
                                <ul class="nav nav-section nav-justified">
                                    <li><a href="javascript:void(0);" class="text-default"><i class="ico-weather-lightning"></i><br/>Mon</a></li>
                                    <li><a href="javascript:void(0);" class="text-default"><i class="ico-windy"></i><br/>Tue</a></li>
                                    <li><a href="javascript:void(0);" class="text-default"><i class="ico-sun"></i><br/>Wed</a></li>
                                    <li><a href="javascript:void(0);" class="text-default"><i class="ico-weather-snow"></i><br/>Thu</a></li>
                                </ul>
                                <!--/ Nav section -->
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <!-- START Table layout -->
                        <div class="table-layout mb15">
                            <div class="col-xs-6 widget panel bgcolor-info">
                                <div class="panel-body">
                                    <h1 class="semibold text-center mt0">18°</h1>
                                    <h4 class="semibold text-center nm">California</h4>
                                </div>
                            </div>
                            <div class="col-xs-6 widget panel">
                                <div class="panel-body text-center">
                                    <i class="ico-snowflake" style="font-size:46px;"></i>
                                    <ul class="list-table mt15">
                                        <li class="text-center">
                                            <i class="ico-droplet"></i>
                                            <p class="nm">1.3MM</p>
                                        </li>
                                        <li class="text-center">
                                            <i class="ico-flag5"></i>
                                            <p class="nm">10MPH</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--/ END Table layout -->

                        <!-- START Table layout -->
                        <div class="table-layout">
                            <div class="col-xs-6 widget panel panel-minimal bgcolor-inverse">
                                <div class="panel-body">
                                    <h1 class="semibold text-center mt0">18°</h1>
                                    <h4 class="semibold text-center nm">California</h4>
                                </div>
                            </div>
                            <div class="col-xs-6 widget panel panel-minimal">
                                <div class="panel-body text-center bgcolor-white">
                                    <i class="ico-snowflake" style="font-size:46px;"></i>
                                </div>
                                <div class="panel-body text-center bgcolor-success">
                                    <ul class="list-table">
                                        <li class="text-center">
                                            <i class="ico-droplet"></i>
                                            <p class="nm">1.3MM</p>
                                        </li>
                                        <li class="text-center">
                                            <i class="ico-flag5"></i>
                                            <p class="nm">10MPH</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--/ END Table layout -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-3">
                        <!-- START Widget Panel -->
                        <div class="widget panel bgcolor-primary">
                            <!-- panel body -->
                            <div class="panel-body">
                                <div class="clearfix">
                                    <p class="pull-left semibold">Copenhagen, DK</p>
                                    <p class="pull-right semibold">
                                        <span class="mr5">&deg;F</span>
                                        <span>&deg;C</span>
                                    </p>
                                </div>
                                <div class="text-center mt15 mb15">
                                    <h1 class="semibold">
                                        <i class="ico-windy"></i>
                                        <span class="">22&deg;</span>
                                    </h1>
                                </div>
                                <div class="clearfix">
                                    <p class="pull-left semibold nm">
                                        <i class="ico-arrow-down5"></i> 21&deg;
                                    </p>
                                    <p class="pull-right semibold nm">
                                        <i class="ico-arrow-up5"></i> 27&deg;
                                    </p>
                                </div>
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>

                    <div class="col-lg-3">
                        <!-- START Widget Panel -->
                        <div class="widget panel bgcolor-warning">
                            <!-- panel body -->
                            <div class="panel-body">
                                <div class="clearfix">
                                    <p class="pull-left semibold">Perth, AU</p>
                                    <p class="pull-right semibold">
                                        <span class="mr5">&deg;F</span>
                                        <span>&deg;C</span>
                                    </p>
                                </div>
                                <div class="text-center mt15 mb15">
                                    <h1 class="semibold">
                                        <i class="ico-sun22"></i>
                                        <span class="">32&deg;</span>
                                    </h1>
                                </div>
                                <div class="clearfix">
                                    <p class="pull-left semibold nm">
                                        <i class="ico-arrow-down5"></i> 31&deg;
                                    </p>
                                    <p class="pull-right semibold nm">
                                        <i class="ico-arrow-up5"></i> 37&deg;
                                    </p>
                                </div>
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>
                </div>
                <!--/ END row -->
                <hr><!-- horizontal line -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">Social Widget</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body bgcolor-success">
                                <ul class="list-unstyled mt15 mb15">
                                    <li class="text-center">
                                        <img class="img-circle img-bordered" src="/image/avatar/avatar2.jpg" alt="" width="65px" height="65px">
                                    </li>
                                    <li class="text-center">
                                        <h5 class="semibold mb0">William Ross</h5>
                                        <span>CEO of a Company</span>
                                    </li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <!-- Nav section -->
                                <ul class="nav nav-section nav-justified">
                                    <li>
                                        <div class="section">
                                            <h4 class="nm"><i class="ico-earth"></i></h4>
                                            <p class="nm">Website</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <h4 class="nm"><i class="ico-brain"></i></h4>
                                            <p class="nm">Skills</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <h4 class="nm"><i class="ico-vcard"></i></h4>
                                            <p class="nm">Portfolio</p>
                                        </div>
                                    </li>
                                </ul>
                                <!--/ Nav section -->
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="list-table">
                                    <li style="width:70px;">
                                        <img class="img-circle img-bordered" src="/image/avatar/avatar1.jpg" alt="" width="65px" height="65px">
                                    </li>
                                    <li class="text-left">
                                        <h5 class="semibold ellipsis">
                                            Quinlan Snow<br/>
                                            <small class="text-muted">@QSnow</small>
                                        </h5>
                                    </li>
                                    <li class="text-right"><button class="btn btn-info"><span class="ico-twitter"></span> Follow</button></li>
                                </ul>
                                <!-- Nav section -->
                                <ul class="nav nav-section nav-justified mt15">
                                    <li>
                                        <div class="section">
                                            <h4 class="nm">12.5k</h4>
                                            <p class="nm text-muted">Followers</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <h4 class="nm">1853</h4>
                                            <p class="nm text-muted">Following</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <h4 class="nm">3451</h4>
                                            <p class="nm text-muted">Tweets</p>
                                        </div>
                                    </li>
                                </ul>
                                <!--/ Nav section -->
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- thumbnail -->
                            <div class="thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- indicator -->
                                    <div class="indicator"><span class="spinner"></span></div>
                                    <!--/ indicator -->
                                    <!-- meta -->
                                    <div class="meta bottom text-center">
                                        <img class="img-circle img-bordered-teal mb10" src="/image/avatar/avatar8.jpg" alt="" width="75px" height="75px">
                                        <p class="nm">California</p>
                                        <h4 class="semibold nm"><span class="iconmoon-location-6"></span> San Franscisco</h4>
                                    </div>
                                    <!--/ meta -->
                                    <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background4.jpg" alt="Cover" width="100%" />
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ thumbnail -->
                            <div class="panel-body">
                                <!-- Nav section -->
                                <ul class="nav nav-section nav-justified">
                                    <li>
                                        <div class="section">
                                            <p class="nm text-muted">Followers</p>
                                            <h4 class="nm">12.5k</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <p class="nm text-muted">Following</p>
                                            <h4 class="nm">1853</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <p class="nm text-muted">Tweets</p>
                                            <h4 class="nm">3451</h4>
                                        </div>
                                    </li>
                                </ul>
                                <!--/ Nav section -->
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <h4 class="mb0">Latest Tweet <i class="ico-twitter text-info pull-right"></i></h4>
                                <hr/>
                                <ul class="list-table">
                                    <li style="width:70px;">
                                        <img class="img-circle img-bordered-primary" src="/image/avatar/avatar4.jpg" alt="" width="65px" height="65px" />
                                    </li>
                                    <li class="text-left">
                                        <h5 class="semibold ellipsis nm">Colt Jenkins</h5>
                                        <p class="text-muted nm">5k followers</p>
                                    </li>
                                    <li class="text-right"><button class="btn btn-sm btn-success">Follow</button></li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                            <!-- List group -->
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <p class="nm">Lorem ipsum dolor sit amet, consectetur <a href="javascript:void(0);">#adipisicing</a> elit, sed do eiusmod.</p>
                                    <small class="text-muted">1 day ago</small>
                                </li>
                                <li class="list-group-item">
                                    <p class="nm">Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui <a href="javascript:void(0);">@officia</a> deserunt mollit anim id est laborum.</p>
                                    <small class="text-muted">2 day ago</small>
                                </li>
                                <li class="list-group-item">
                                    <p class="nm">Duis aute irure dolor in <a href="javascript:void(0);">tweet.er</a> in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur.</p>
                                    <small class="text-muted">3 day ago</small>
                                </li>
                            </ul>
                            <!-- List group -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- thumbnail -->
                            <div class="thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- indicator -->
                                    <div class="indicator"><span class="spinner"></span></div>
                                    <!--/ indicator -->
                                    <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="https://maps.googleapis.com/maps/api/staticmap?center=50.0615581,19.9365147&zoom=13&size=400x250&sensor=false&key=AIzaSyBkba35-FVRDk3mBFH7XrEWgNlfb8IeAX8" alt="Cover" width="100%" />
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ thumbnail -->
                            <!-- panel body -->
                            <div class="panel-body" style="z-index:2;">
                                <ul class="list-unstyled">
                                    <li class="text-center">
                                        <img class="img-circle img-bordered" src="/image/avatar/avatar5.jpg" alt="" width="75px" height="75px">
                                        <br/>
                                        <h5 class="semibold mb0">Orli Waller</h5>
                                        <p class="nm text-muted">Front-end Developer</p>
                                    </li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                            <!-- panel ribbon -->
                            <a href="javascript:void(0);" class="panel-ribbon panel-ribbon-primary"><i class="ico-info"></i></a>
                            <!--/ panel ribbon -->
                            <!-- table -->
                            <table class="table">
                                <thead></thead>
                                <tbody>
                                    <tr>
                                        <td width="50%">Web development</td>
                                        <td>
                                            <div class="progress progress-xs nm">
                                                <div class="progress-bar" style="width: 60%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%">Server patching</td>
                                        <td>
                                            <div class="progress progress-xs nm">
                                                <div class="progress-bar progress-bar-warning" style="width: 40%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%">Mobile framework</td>
                                        <td>
                                            <div class="progress progress-xs nm">
                                                <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--/ table -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel ribbon -->
                            <a href="javascript:void(0);" class="panel-ribbon panel-ribbon-danger pull-right"><i class="ico-heart4"></i></a>
                            <!--/ panel ribbon -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li class="text-center">
                                        <img class="img-circle img-bordered-danger" src="/image/avatar/avatar4.jpg" alt="" width="75px" height="75px">
                                        <br/>
                                        <h5 class="semibold mb0">Orli Waller</h5>
                                        <p class="nm text-muted">Front-end Developer</p>
                                    </li>
                                </ul>
                                <hr>
                                <!-- blockquote -->
                                <blockquote class="mt10 text-muted text-center">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                                </blockquote>
                                <!--/ blockquote -->
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="panel overflow-hidden">
                            <!-- User info -->
                            <ul class="list-table pa15">
                                <li class="text-left" style="width:60px;">
                                    <img class="img-circle" src="/image/avatar/avatar2.jpg" alt="" width="50px" height="50px">
                                </li>
                                <li class="text-left">
                                    <p class="ellipsis nm"><span class="semibold">Alberto Kusagi</span></p>
                                    <p class="text-muted nm">3 Hour ago</p>
                                </li>
                                <li class="text-right" style="width:60px;">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-link dropdown-toggle text-default" data-toggle="dropdown"><i class="ico-menu2"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:void(0);">Report</a></li>
                                            <li><a href="javascript:void(0);">Setting</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);" class="text-danger">Delete post</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <!--/ User info -->
                            <hr class="nm"><!-- horizontal line -->
                            <!-- START Gridster -->
                            <div class="img-grid">
                                <ul class="list-unstyled row">
                                    <li class="col-xs-8">
                                        <!-- thumbnail -->
                                        <div class="thumbnail">
                                            <!-- media -->
                                            <div class="media" style="height:310px;">
                                                <!-- indicator -->
                                                <div class="indicator"><span class="spinner"></span></div>
                                                <!--/ indicator -->
                                                <!-- toolbar overlay -->
                                                <div class="overlay show">
                                                    <div class="meta bottom">
                                                        <h4 class="thin mt0">Lorem ipsum dolor sit amet</h4>
                                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <a href="javascript:void(0);" class="btn btn-success btn-sm">View</a>
                                                    </div>
                                                </div>
                                                <!--/ toolbar overlay -->
                                                <img data-toggle="unveil" src="/image/background/placeholder.jpg" data-src="/image/background/background8.jpg" alt="Photo" />
                                            </div>
                                            <!--/ media -->
                                        </div>
                                        <!--/ thumbnail -->
                                    </li>
                                    <li class="col-xs-4">
                                        <ul class="list-unstyled row">
                                            <li class="col-xs-12">
                                                <!-- thumbnail -->
                                                <div class="thumbnail">
                                                    <!-- media -->
                                                    <div class="media" style="height:100px;">
                                                        <!-- indicator -->
                                                        <div class="indicator"><span class="spinner"></span></div>
                                                        <!--/ indicator -->
                                                        <!-- toolbar overlay -->
                                                        <div class="overlay">
                                                            <div class="toolbar">
                                                                <a href="javascript:void(0);" class="btn btn-danger" title="love this collection"><i class="ico-heart6"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--/ toolbar overlay -->
                                                        <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background5.jpg" alt="Photo" />
                                                    </div>
                                                    <!--/ media -->
                                                </div>
                                                <!--/ thumbnail -->
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled row">
                                            <li class="col-xs-12">
                                                <!-- thumbnail -->
                                                <div class="thumbnail">
                                                    <!-- media -->
                                                    <div class="media" style="height:100px;">
                                                        <!-- indicator -->
                                                        <div class="indicator"><span class="spinner"></span></div>
                                                        <!--/ indicator -->
                                                        <!-- toolbar overlay -->
                                                        <div class="overlay">
                                                            <div class="toolbar">
                                                                <a href="javascript:void(0);" class="btn btn-danger" title="love this collection"><i class="ico-heart6"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--/ toolbar overlay -->
                                                        <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background6.jpg" alt="Photo" />
                                                    </div>
                                                    <!--/ media -->
                                                </div>
                                                <!--/ thumbnail -->
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled row">
                                            <li class="col-xs-12">
                                                <!-- thumbnail -->
                                                <div class="thumbnail">
                                                    <!-- media -->
                                                    <div class="media" style="height:100px;">
                                                        <!-- indicator -->
                                                        <div class="indicator"><span class="spinner"></span></div>
                                                        <!--/ indicator -->
                                                        <!-- toolbar overlay -->
                                                        <div class="overlay">
                                                            <div class="toolbar">
                                                                <a href="javascript:void(0);" class="btn btn-danger" title="love this collection"><i class="ico-heart6"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--/ toolbar overlay -->
                                                        <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background7.jpg" alt="Photo" />
                                                    </div>
                                                    <!--/ media -->
                                                </div>
                                                <!--/ thumbnail -->
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!--/ END Gridster -->
                            <!-- panel footer -->
                            <div class="panel-footer">
                                <ul class="list-table">
                                    <li>
                                        <div class="img-group img-group-stack">
                                            <img src="/image/avatar/avatar1.jpg" class="img-circle" alt="" />
                                            <img src="/image/avatar/avatar2.jpg" class="img-circle" alt="" />
                                            <img src="/image/avatar/avatar3.jpg" class="img-circle" alt="" />
                                        </div>
                                    </li>
                                    <li class="text-right">
                                        <p class="nm"><a href="javascript:void(0);" class="semibold">3 people</a> love this</p>
                                    </li>
                                </ul>
                            </div>
                            <!--/ panel footer -->
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="panel overflow-hidden">
                            <!-- User info -->
                            <ul class="list-table pa15">
                                <li class="text-left" style="width:60px;">
                                    <img class="img-circle" src="/image/avatar/avatar5.jpg" alt="" width="50px" height="50px">
                                </li>
                                <li class="text-left">
                                    <p class="ellipsis nm"><span class="semibold">Noel Amstrong</span></p>
                                    <p class="text-muted nm">3 Hour ago</p>
                                </li>
                                <li class="text-right" style="width:60px;">
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-link dropdown-toggle text-default" data-toggle="dropdown"><i class="ico-menu2"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:void(0);">Report</a></li>
                                            <li><a href="javascript:void(0);">Setting</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);" class="text-danger">Delete post</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <!--/ User info -->
                            <hr class="nm"><!-- horizontal line -->
                            <!-- START Gridster -->
                            <div class="img-grid">
                                <ul class="list-unstyled row">
                                    <li class="col-xs-6">
                                        <ul class="list-unstyled row">
                                            <li class="col-xs-12">
                                                <!-- thumbnail -->
                                                <div class="thumbnail">
                                                    <!-- media -->
                                                    <div class="media" style="height:140px;">
                                                        <!-- indicator -->
                                                        <div class="indicator"><span class="spinner"></span></div>
                                                        <!--/ indicator -->
                                                        <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background2.jpg" alt="Photo" />
                                                    </div>
                                                    <!--/ media -->
                                                </div>
                                                <!--/ thumbnail -->
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled row">
                                            <li class="col-xs-12">
                                                <!-- thumbnail -->
                                                <div class="thumbnail">
                                                    <!-- media -->
                                                    <div class="media" style="height:140px;">
                                                        <!-- indicator -->
                                                        <div class="indicator"><span class="spinner"></span></div>
                                                        <!--/ indicator -->
                                                        <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background3.jpg" alt="Photo" />
                                                    </div>
                                                    <!--/ media -->
                                                </div>
                                                <!--/ thumbnail -->
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-xs-6">
                                        <ul class="list-unstyled row">
                                            <li class="col-xs-12">
                                                <!-- thumbnail -->
                                                <div class="thumbnail">
                                                    <!-- media -->
                                                    <div class="media" style="height:140px;">
                                                        <!-- indicator -->
                                                        <div class="indicator"><span class="spinner"></span></div>
                                                        <!--/ indicator -->
                                                        <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background4.jpg" alt="Photo" />
                                                    </div>
                                                    <!--/ media -->
                                                </div>
                                                <!--/ thumbnail -->
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled row">
                                            <li class="col-xs-12">
                                                <!-- thumbnail -->
                                                <div class="thumbnail">
                                                    <!-- media -->
                                                    <div class="media" style="height:140px;">
                                                        <!-- indicator -->
                                                        <div class="indicator"><span class="spinner"></span></div>
                                                        <!--/ indicator -->
                                                        <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background5.jpg" alt="Photo" />
                                                    </div>
                                                    <!--/ media -->
                                                </div>
                                                <!--/ thumbnail -->
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!--/ END Gridster -->
                            <!-- panel footer -->
                            <div class="panel-footer">
                                <ul class="list-table">
                                    <li>
                                        <div class="img-group img-group-stack">
                                            <img src="/image/avatar/avatar1.jpg" class="img-circle" alt="" />
                                            <img src="/image/avatar/avatar2.jpg" class="img-circle" alt="" />
                                            <img src="/image/avatar/avatar3.jpg" class="img-circle" alt="" />
                                        </div>
                                    </li>
                                    <li class="text-right">
                                        <p class="nm"><a href="javascript:void(0);" class="semibold">3 people</a> love this</p>
                                    </li>
                                </ul>
                            </div>
                            <!--/ panel footer -->
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="panel overflow-hidden">
                            <!-- User info -->
                            <ul class="list-table pa15">
                                <li class="text-left" style="width:60px;">
                                    <img class="img-circle" src="/image/avatar/avatar9.jpg" alt="" width="50px" height="50px">
                                </li>
                                <li class="text-left">
                                    <p class="ellipsis nm"><span class="semibold">Tamara Moon</span></p>
                                    <p class="text-muted nm">3 Hour ago</p>
                                </li>
                                <li class="text-right" style="width:60px;">
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-link dropdown-toggle text-default" data-toggle="dropdown"><i class="ico-menu2"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:void(0);">Report</a></li>
                                            <li><a href="javascript:void(0);">Setting</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);" class="text-danger">Delete post</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <!--/ User info -->
                            <hr class="nm"><!-- horizontal line -->
                            <!-- START Gridster -->
                            <div class="img-grid">
                                <ul class="list-unstyled row">
                                    <li class="col-xs-12">
                                        <!-- thumbnail -->
                                        <div class="thumbnail">
                                            <!-- media -->
                                            <div class="media" style="height:220px;">
                                                <!-- indicator -->
                                                <div class="indicator"><span class="spinner"></span></div>
                                                <!--/ indicator -->
                                                <!-- toolbar overlay -->
                                                <div class="overlay show">
                                                    <div class="meta bottom">
                                                        <h4 class="thin mt0">Lorem ipsum dolor sit amet</h4>
                                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <a href="javascript:void(0);" class="btn btn-success btn-sm">View</a>
                                                    </div>
                                                </div>
                                                <!--/ toolbar overlay -->
                                                <img data-toggle="unveil" src="/image/background/placeholder.jpg" data-src="/image/background/background8.jpg" alt="Photo" />
                                            </div>
                                            <!--/ media -->
                                        </div>
                                        <!--/ thumbnail -->
                                    </li>
                                </ul>

                                <ul class="list-unstyled row">
                                    <li class="col-xs-4">
                                        <!-- thumbnail -->
                                        <div class="thumbnail">
                                            <!-- media -->
                                            <div class="media" style="height:100px;">
                                                <!-- indicator -->
                                                <div class="indicator"><span class="spinner"></span></div>
                                                <!--/ indicator -->
                                                <!-- toolbar overlay -->
                                                <div class="overlay show"></div>
                                                <!--/ toolbar overlay -->
                                                <img data-toggle="unveil" src="/image/background/placeholder.jpg" data-src="/image/background/background10.jpg" alt="Photo" />
                                            </div>
                                            <!--/ media -->
                                        </div>
                                        <!--/ thumbnail -->
                                    </li>
                                    <li class="col-xs-4">
                                        <!-- thumbnail -->
                                        <div class="thumbnail">
                                            <!-- media -->
                                            <div class="media" style="height:100px;">
                                                <!-- indicator -->
                                                <div class="indicator"><span class="spinner"></span></div>
                                                <!--/ indicator -->
                                                <!-- toolbar overlay -->
                                                <div class="overlay show"></div>
                                                <!--/ toolbar overlay -->
                                                <img data-toggle="unveil" src="/image/background/placeholder.jpg" data-src="/image/background/background3.jpg" alt="Photo" />
                                            </div>
                                            <!--/ media -->
                                        </div>
                                        <!--/ thumbnail -->
                                    </li>
                                    <li class="col-xs-4">
                                        <!-- thumbnail -->
                                        <div class="thumbnail">
                                            <!-- media -->
                                            <div class="media" style="height:100px;">
                                                <!-- indicator -->
                                                <div class="indicator"><span class="spinner"></span></div>
                                                <!--/ indicator -->
                                                <!-- toolbar overlay -->
                                                <div class="overlay show"></div>
                                                <!--/ toolbar overlay -->
                                                <img data-toggle="unveil" src="/image/background/placeholder.jpg" data-src="/image/background/background6.jpg" alt="Photo" />
                                            </div>
                                            <!--/ media -->
                                        </div>
                                        <!--/ thumbnail -->
                                    </li>
                                </ul>
                            </div>
                            <!--/ END Gridster -->
                            <!-- panel footer -->
                            <div class="panel-footer">
                                <ul class="list-table">
                                    <li>
                                        <div class="img-group img-group-stack">
                                            <img src="/image/avatar/avatar1.jpg" class="img-circle" alt="" />
                                            <img src="/image/avatar/avatar2.jpg" class="img-circle" alt="" />
                                            <img src="/image/avatar/avatar3.jpg" class="img-circle" alt="" />
                                        </div>
                                    </li>
                                    <li class="text-right">
                                        <p class="nm"><a href="javascript:void(0);" class="semibold">3 people</a> love this</p>
                                    </li>
                                </ul>
                            </div>
                            <!--/ panel footer -->
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-3">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li class="text-center mb15">
                                        <img class="img-rounded img-bordered-primary" src="/image/avatar/avatar6.jpg" alt="" width="100px" height="100px" />
                                    </li>
                                    <li class="text-center mb10">
                                        <h4 class="semibold ellipsis nm">Colt Jenkins</h4>
                                        <p class="text-muted nm">Nullam Ut Nisi Corporation</p>
                                    </li>
                                    <li class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>
                    <div class="col-md-3">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li class="text-center mb15">
                                        <img class="img-circle img-bordered-primary" src="/image/avatar/avatar1.jpg" alt="" width="100px" height="100px" />
                                    </li>
                                    <li class="text-center mb10">
                                        <h4 class="semibold ellipsis nm text-primary">Deborah Workman</h4>
                                        <p class="text-muted nm">Ultrices Industries</p>
                                    </li>
                                    <li class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>
                    <div class="col-md-3">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li class="text-center mb15">
                                        <img class="img-circle img-bordered-primary" src="/image/avatar/avatar8.jpg" alt="" width="100px" height="100px" />
                                    </li>
                                    <li class="text-center mb10">
                                        <h4 class="semibold ellipsis nm text-primary">Uriah Benjamin</h4>
                                        <p class="text-muted nm">Elit Company</p>
                                    </li>
                                    <li class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>
                    <div class="col-md-3">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li class="text-center mb15">
                                        <img class="img-rounded img-bordered-primary" src="/image/avatar/avatar9.jpg" alt="" width="100px" height="100px" />
                                    </li>
                                    <li class="text-center mb10">
                                        <h4 class="semibold ellipsis nm">MacKenzie Huffman</h4>
                                        <p class="text-muted nm">Sodales Company</p>
                                    </li>
                                    <li class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>
                </div>
                <!--/ END row -->
                <hr><!-- horizontal line -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">Misc Widget</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-4">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <h5 class="semibold text-primary">Task Widget</h5>
                            </div>
                            <!--/ panel body -->
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="5%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox1" value="1" data-toggle="selectrow" data-target="tr" data-contextual="stroke">
                                                <label for="customcheckbox1"></label>
                                            </div>
                                        </td>
                                        <td width="5%"><i class="ico-food"></td>
                                        <td>Dinner with someone</td>
                                    </tr>
                                    <tr>
                                        <td width="5%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox2" value="1" data-toggle="selectrow" data-target="tr" data-contextual="stroke">
                                                <label for="customcheckbox2"></label>
                                            </div>
                                        </td>
                                        <td width="5%"><i class="ico-gun"></td>
                                        <td>Kill some mobs</td>
                                    </tr>
                                    <tr>
                                        <td width="5%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox3" value="1" data-toggle="selectrow" data-target="tr" data-contextual="stroke">
                                                <label for="customcheckbox3"></label>
                                            </div>
                                        </td>
                                        <td width="5%"><i class="ico-football"></td>
                                        <td>Go out and play football</td>
                                    </tr>
                                    <tr>
                                        <td width="5%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox4" value="1" data-toggle="selectrow" data-target="tr" data-contextual="stroke">
                                                <label for="customcheckbox4"></label>
                                            </div>
                                        </td>
                                        <td width="5%"><i class="ico-shield3"></td>
                                        <td>Shield the house</td>
                                    </tr>
                                    <tr>
                                        <td width="5%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox5" value="1" data-toggle="selectrow" data-target="tr" data-contextual="stroke">
                                                <label for="customcheckbox5"></label>
                                            </div>
                                        </td>
                                        <td width="5%"><i class="ico-power-cord"></td>
                                        <td>Cut off power supply</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- panel footer -->
                            <div class="panel-footer">
                                <div class="input-group">
                                <input type="text" class="form-control" name="task" placeholder="Add new task">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Add</button>
                                    </span>
                                </div>
                            </div>
                            <!--/ panel footer -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="list-table">
                                    <li style="width:70px;">
                                        <img class="img-rounded" src="/image/background/400x400/background12.jpg" alt="" width="65px" height="65px">
                                    </li>
                                    <li class="text-left">
                                        <h5 class="semibold ellipsis nm">Lamb Of Chop</h5>
                                        <p class="text-muted nm">5 Song in playlist</p>
                                    </li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td width="5%">
                                            <a href="javascript:void(0);" class="text-default"><i class="ico-play32"></i></a>
                                        </td>
                                        <td>Walk With Me to Hell</td>
                                    </tr>
                                    <tr>
                                        <td width="5%">
                                            <a href="javascript:void(0);" class="text-default"><i class="ico-play32"></i></a>
                                        </td>
                                        <td>Laid To Death</td>
                                    </tr>
                                    <tr>
                                        <td width="5%">
                                            <a href="javascript:void(0);" class="text-default"><i class="ico-play32"></i></a>
                                        </td>
                                        <td>Rain</td>
                                    </tr>
                                    <tr>
                                        <td width="5%">
                                            <a href="javascript:void(0);" class="text-success"><i class="ico-stop2"></i></a>
                                        </td>
                                        <td class="text-success semibold">Blackneck</td>
                                    </tr>
                                    <tr>
                                        <td width="5%">
                                            <a href="javascript:void(0);" class="text-default"><i class="ico-play32"></i></a>
                                        </td>
                                        <td>Pink Label</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- panel footer -->
                            <div class="panel-footer">
                                <ul class="nav nav-section nav-justified">
                                    <li><a href="javascript:void(0);"><i class="ico-step-backward"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="ico-play3"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="ico-pause"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="ico-spinner12"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="ico-step-forward"></i></a></li>
                                </ul>
                            </div>
                            <!--/ panel footer -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>

                    <div class="col-lg-4">
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body bgcolor-primary">
                                <ul class="list-table">
                                    <li><h3 class="semibold nm text-left">20.514</h3></li>
                                    <li><p class="semibold nm text-right">Total visitor <i class="ico-male ml5"></i></p></li>
                                </ul>
                                <!-- chart -->
                                <div class="chart mt15" id="visitor-wchart"></div>
                                <!--/ chart -->
                            </div>
                            <!--/ panel body -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="nav nav-section nav-justified">
                                    <li>
                                        <div class="section">
                                            <span class="text-muted">Visits</span>
                                            <h4 class="nm">4792</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <span class="text-muted">Recuring</span>
                                            <h4 class="nm">1283</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <span class="text-muted">Pageview</span>
                                            <h4 class="nm">74558</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="list-table">
                                    <li><h4 class="semibold nm text-left"><i class="ico-shield2 mr5"></i>Violations</h4></li>
                                    <li><h4 class="semibold nm text-right text-muted">1063</h5></li>
                                </ul>
                                <!-- chart -->
                                <div class="chart mt15" id="violations-wchart"></div>
                                <!--/ chart -->
                            </div>
                            <!--/ panel body -->
                            <!-- panel body -->
                            <div class="panel-footer">
                                <ul class="nav nav-section nav-justified">
                                    <li>
                                        <div class="section text-danger">
                                            <h4 class="nm">2743</h4>
                                            <span>High Risk</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <h4 class="nm">87</h4>
                                            <span class="text-muted">Medium Risk</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <h4 class="nm">10</h4>
                                            <span class="text-muted">Blocking</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <!-- Carousel -->
                        <div class="panel nm no-border">
                            <div class="panel-body owl-carousel" id="carousel1">
                                <!-- slide #1 -->
                                <div class="item table-layout">
                                    <div class="col-sm-3 text-center">
                                        <img src="/image/icons/supportservices.png" alt="support" width="100%">
                                    </div>
                                    <div class="col-sm-9">
                                        <h4>24 Hour Awesome Support</h4>
                                        <p class="text-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur.</p>
                                        <a href="javascript:void(0);">Learn more&#8230;</a>
                                    </div>
                                </div>
                                <!--/ slide #1 -->
                                <!-- slide #2 -->
                                <div class="item table-layout">
                                    <div class="col-sm-3 text-center">
                                        <img src="/image/icons/socialengagement.png" alt="advertisment" width="100%">
                                    </div>
                                    <div class="col-sm-9 pl15">
                                        <h4>Awesome Advertisment Services</h4>
                                        <p class="text-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur.</p>
                                        <a href="javascript:void(0);">Learn more&#8230;</a>
                                    </div>
                                </div>
                                <!--/ slide #2 -->
                                <!-- slide #3 -->
                                <div class="item table-layout">
                                    <div class="col-sm-3 text-center">
                                        <img src="/image/icons/onlinepresencemanagement.png" alt="fast" width="100%">
                                    </div>
                                    <div class="col-sm-9 pl15">
                                        <h4>Blazing Fast</h4>
                                        <p class="text-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur.</p>
                                        <a href="javascript:void(0);">Learn more&#8230;</a>
                                    </div>
                                </div>
                                <!--/ slide #3 -->
                            </div>
                        </div>
                        <!--/ Carousel -->
                    </div>
                </div>
                <!--/ END row -->
            </div>
@endsection

@section('footer')
@endsection

