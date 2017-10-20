@extends('landerv2.layouts.admin')

@section('page_title')
Lander.v2 - Bootstrap WebApp & Dashboard
@endsection

@section('asset_css')
        <link rel="stylesheet" href="/plugins/ladda/css/ladda.css">
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/ladda/js/vendor/spin.js"></script>
        <script type="text/javascript" src="/plugins/ladda/js/ladda.js"></script>
        <script type="text/javascript" src="/javascript/backend/components/button.js"></script>
@endsection

@section('content')
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold">Buttons</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">UI Elements</a></li>
                                <li class="active">Buttons</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button colors</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <p>Use any of the available button classes to quickly create a styled button.</p>
                                    <button type="button" class="btn btn-default mb5">Default</button>
                                    <button type="button" class="btn btn-primary mb5">Primary</button>
                                    <button type="button" class="btn btn-success mb5">Success</button>
                                    <button type="button" class="btn btn-info mb5">Info</button>
                                    <button type="button" class="btn btn-warning mb5">Warning</button>
                                    <button type="button" class="btn btn-danger mb5">Danger</button>
                                    <button type="button" class="btn btn-inverse mb5">Inverse</button>
                                    <button type="button" class="btn btn-teal mb5">Teal</button>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button with icon</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <button type="button" class="btn btn-default mb5"><i class="ico-fire22"></i> Default</button>
                                    <button type="button" class="btn btn-primary mb5"><i class="ico-fire22"></i> Primary</button>
                                    <button type="button" class="btn btn-success mb5"><i class="ico-fire22"></i> Success</button>
                                    <button type="button" class="btn btn-info mb5"><i class="ico-fire22"></i> Info</button>
                                    <button type="button" class="btn btn-warning mb5"><i class="ico-fire22"></i> Warning</button>
                                    <button type="button" class="btn btn-danger mb5"><i class="ico-fire22"></i> Danger</button>
                                    <button type="button" class="btn btn-inverse mb5"><i class="ico-fire22"></i> Inverse</button>
                                    <button type="button" class="btn btn-teal mb5"><i class="ico-fire22"></i> Teal</button>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button sizing</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <p>Fancy larger or smaller buttons? Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for additional sizes.</p>
                                    <p>
                                        <button type="button" class="btn btn-primary btn-lg">Large button</button>
                                        <button type="button" class="btn btn-default btn-lg">Large button</button>
                                    </p>
                                    <p>
                                        <button type="button" class="btn btn-primary">Default button</button>
                                        <button type="button" class="btn btn-default">Default button</button>
                                    </p>
                                    <p>
                                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                                        <button type="button" class="btn btn-default btn-sm">Small button</button>
                                    </p>
                                    <p>
                                        <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
                                        <button type="button" class="btn btn-default btn-xs">Extra small button</button>
                                    </p>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button group</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <p>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>
                                    <p>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">Left</button>
                                            <button type="button" class="btn btn-default">Middle</button>
                                            <button type="button" class="btn btn-default">Right</button>
                                        </div>
                                    </p>
                                    <p>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">1</button>
                                            <button type="button" class="btn btn-default">2</button>
                                            <button type="button" class="btn btn-default">3</button>
                                            <button type="button" class="btn btn-default">4</button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">5</button>
                                            <button type="button" class="btn btn-default">6</button>
                                            <button type="button" class="btn btn-default">7</button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">8</button>
                                        </div>
                                    </p>
                                    <p>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">1</button>
                                            <button type="button" class="btn btn-default">2</button>

                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                    Dropdown
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupDrop1">
                                                    <li><a href="javascript:void(0);">Dropdown link</a></li>
                                                    <li><a href="javascript:void(0);">Dropdown link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button dropdown</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <p>Turn a button into a dropdown toggle with some basic markup changes.</p>
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Default <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Primary <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">Inverse <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-teal dropdown-toggle" data-toggle="dropdown">Teal <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title ellipsis">Split button dropdown</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <p>Similarly, create split button dropdowns with the same markup changes, only with a separate button.</p>
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-default">Default</button>
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-primary">Primary</button>
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-success">Success</button>
                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-info">Info</button>
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-warning">Warning</button>
                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-danger">Danger</button>
                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-inverse">Inverse</button>
                                        <button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-teal">Teal</button>
                                        <button type="button" class="btn btn-teal dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button tag</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
                                    <a class="btn btn-default" href="javascript:void(0);" role="button">Link</a>
                                    <button class="btn btn-default" type="submit">Button</button>
                                    <input class="btn btn-default" type="button" value="Input">
                                    <input class="btn btn-default" type="submit" value="Submit">
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->

                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button outline</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <p>Use any of the available button classes to quickly create a styled button.</p>
                                    <button type="button" class="btn btn-default btn-outline mb5">Default</button>
                                    <button type="button" class="btn btn-primary btn-outline mb5">Primary</button>
                                    <button type="button" class="btn btn-success btn-outline mb5">Success</button>
                                    <button type="button" class="btn btn-info btn-outline mb5">Info</button>
                                    <button type="button" class="btn btn-warning btn-outline mb5">Warning</button>
                                    <button type="button" class="btn btn-danger btn-outline mb5">Danger</button>
                                    <button type="button" class="btn btn-inverse btn-outline mb5">Inverse</button>
                                    <button type="button" class="btn btn-teal btn-outline mb5">Teal</button>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button state</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <h5>Active state</h5>
                                    <p>No need to add <code>:active</code> as it's a pseudo-class, but if you need to force the same appearance, go ahead and add <code>.active</code>.</p>
                                    <button type="button" class="btn btn-primary btn-lg active">Primary button</button>
                                    <button type="button" class="btn btn-default btn-lg active">Button</button>
                                    <h5>Disable state</h5>
                                    <p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>
                                    <button type="button" class="btn btn-lg btn-primary" disabled="disabled">Primary button</button>
                                    <button type="button" class="btn btn-default btn-lg" disabled="disabled">Button</button>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Pagination</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <h4 class="mt0 text-primary">Default pagination</h4>
                                    <p>Simple pagination inspired by Rdio, great for apps and search results. The large block is hard to miss, easily scalable, and provides large click areas.</p>
                                    <ul class="pagination mt0">
                                        <li><a href="javascript:void(0);">&laquo;</a></li>
                                        <li><a href="javascript:void(0);">1</a></li>
                                        <li><a href="javascript:void(0);">2</a></li>
                                        <li><a href="javascript:void(0);">3</a></li>
                                        <li><a href="javascript:void(0);">4</a></li>
                                        <li><a href="javascript:void(0);">5</a></li>
                                        <li><a href="javascript:void(0);">&raquo;</a></li>
                                    </ul>
                                    <h4 class="text-info">Disabled and active states</h4>
                                    <p>Links are customizable for different circumstances. Use <code>.disabled</code> for unclickable links and <code>.active</code> to indicate the current page.</p>
                                    <ul class="pagination mt0">
                                        <li class="disabled"><a href="javascript:void(0);">«</a></li>
                                        <li class="active"><a href="javascript:void(0);">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="javascript:void(0);">2</a></li>
                                        <li><a href="javascript:void(0);">3</a></li>
                                        <li><a href="javascript:void(0);">4</a></li>
                                        <li><a href="javascript:void(0);">5</a></li>
                                        <li><a href="javascript:void(0);">»</a></li>
                                    </ul>
                                    <h4 class="text-danger">Sizing</h4>
                                    <p>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes.</p>
                                    <div>
                                        <ul class="pagination pagination-lg mt0">
                                            <li><a href="javascript:void(0);">«</a></li>
                                            <li><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">»</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="pagination mt0">
                                            <li><a href="javascript:void(0);">«</a></li>
                                            <li><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                            <li><a href="javascript:void(0);">»</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="pagination pagination-sm mt0">
                                            <li><a href="javascript:void(0);">«</a></li>
                                            <li><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                            <li><a href="javascript:void(0);">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->

                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button rounded</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <p>Add rounded corner to button.</p>
                                    <button type="button" class="btn btn-default btn-rounded btn-xs mb5">Button</button>
                                    <button type="button" class="btn btn-default btn-rounded btn-sm mb5">Button</button>
                                    <button type="button" class="btn btn-default btn-rounded mb5">Button</button>
                                    <button type="button" class="btn btn-default btn-rounded btn-lg mb5">Button</button>
                                    <button type="button" class="btn btn-default btn-rounded mb5">Button</button>
                                    <button type="button" class="btn btn-default btn-rounded btn-sm mb5">Button</button>
                                    <button type="button" class="btn btn-default btn-rounded btn-xs mb5">Button</button>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Pager</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <h4 class="mt0">Pager</h4>
                                    <p>Quick previous and next links for simple pagination implementations with light markup and styles. It's great for simple sites like blogs or magazines.</p>
                                    <ul class="pager mt0">
                                        <li><a href="javascript:void(0);">Previous</a></li>
                                        <li><a href="javascript:void(0);">Next</a></li>
                                    </ul>
                                    <h4 class="text-warning">Aligned links</h4>
                                    <p>Alternatively, you can align each link to the sides:</p>
                                    <ul class="pager mt0">
                                        <li class="previous"><a href="javascript:void(0);">&larr; Older</a></li>
                                        <li class="next"><a href="javascript:void(0);">Newer &rarr;</a></li>
                                    </ul>
                                    <h4 class="text-teal">Optional disabled state</h4>
                                    <p>Pager links also use the general <code>.disabled</code> utility class from the pagination.</p>
                                    <ul class="pager mt0">
                                        <li class="previous disabled"><a href="javascript:void(0);">&larr; Older</a></li>
                                        <li class="next"><a href="javascript:void(0);">Newer &rarr;</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->

                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button loading</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <p>You can choose the style of the effect by setting the <code>data-style</code> attribute:</p>
                                    <p class="nm">
                                        <button class="btn btn-primary ladda-button mb5" data-style="expand-left"><span class="ladda-label">Expend left</span></button>
                                        <button class="btn btn-primary ladda-button mb5" data-style="expand-right"><span class="ladda-label">Expend right</span></button>
                                        <button class="btn btn-primary ladda-button mb5" data-style="expand-up"><span class="ladda-label">Expend up</span></button>
                                        <button class="btn btn-primary ladda-button mb5" data-style="expand-down"><span class="ladda-label">Expend down</span></button>
                                    </p>
                                    <p class="nm">
                                        <button class="btn btn-danger ladda-button mb5" data-style="zoom-in"><span class="ladda-label">Zoom in</span></button>
                                        <button class="btn btn-danger ladda-button mb5" data-style="zoom-out"><span class="ladda-label">Zoom out</span></button>
                                    </p>
                                    <p class="nm">
                                        <button class="btn btn-success ladda-button mb5" data-style="slide-left"><span class="ladda-label">Slide left</span></button>
                                        <button class="btn btn-success ladda-button mb5" data-style="slide-right"><span class="ladda-label">Slide right</span></button>
                                        <button class="btn btn-success ladda-button mb5" data-style="slide-up"><span class="ladda-label">Slide up</span></button>
                                        <button class="btn btn-success ladda-button mb5" data-style="slide-down"><span class="ladda-label">Slide down</span></button>
                                    </p>
                                    <p class="nm">
                                        <button class="btn btn-info ladda-button ladda-progress mb5" data-style="expand-left"><span class="ladda-label">Expend left</span></button>
                                        <button class="btn btn-info ladda-button ladda-progress mb5" data-style="expand-right"><span class="ladda-label">Expend right</span></button>
                                    </p>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->
            </div>
@endsection

