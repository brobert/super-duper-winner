@extends('layouts.admin')

@section('page_title')
Lander.v2 - Bootstrap WebApp & Dashboard
@endsection

@section('asset_css')
@endsection

@section('asset_css_theme')
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/javascript/backend/tables/default.js"></script>
@endsection

@section('content')
            <div class="container-fluid">

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START panel -->
                        <div class="panel panel-primary">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-table22"></i></span> Table Showcase</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-12"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel toolbar wrapper -->
                            <div class="panel-toolbar-wrapper pl0 pt5 pb5">
                                <div class="panel-toolbar pl10">
                                    <div class="checkbox custom-checkbox pull-left">
                                        <input type="checkbox" id="customcheckbox-one0" value="1" data-toggle="checkall" data-target="#table1">
                                        <label for="customcheckbox-one0">&nbsp;&nbsp;Select all</label>
                                    </div>
                                </div>
                                <div class="panel-toolbar text-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-default"><i class="ico-upload22"></i></button>
                                        <button type="button" class="btn btn-sm btn-default"><i class="ico-archive2"></i></button>
                                    </div>

                                    <button type="button" class="btn btn-sm btn-danger"><i class="ico-remove3"></i></button>
                                </div>
                            </div>
                            <!--/ panel toolbar wrapper -->

                            <!-- panel body with collapse capabale -->
                            <div class="table-responsive panel-collapse pull out">
                                <table class="table table-bordered table-hover" id="table1">
                                    <thead>
                                        <tr>
                                            <th width="3%" class="text-center"><i class="ico-long-arrow-down"></i></th>
                                            <th width="5%"></th>
                                            <th>Name</th>
                                            <th>Country</th>
                                            <th>Email</th>
                                            <th>Company</th>
                                            <th width="10%">Progress</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="checkbox custom-checkbox nm">
                                                    <input type="checkbox" id="customcheckbox-one1" value="1" data-toggle="selectrow" data-target="tr" data-contextual="success" checked>
                                                    <label for="customcheckbox-one1"></label>
                                                </div>
                                            </td>
                                            <td><div class="media-object"><img src="/image/avatar/avatar.png" alt="" class="img-circle"></div>
                                            </td>
                                            <td>Short, Cheyenne E.</td>
                                            <td>Bangladesh</td>
                                            <td>quis.diam@gravida.net</td>
                                            <td>Tellus Non Corp.</td>
                                            <td>
                                                <div class="progress progress-xs nm">
                                                    <div class="progress-bar progress-bar-danger" style="width:30%;"></div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <!-- button toolbar -->
                                                <div class="toolbar">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-default">Action</button>
                                                        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="javascript:void(0);"><i class="icon ico-pencil"></i>Update</a></li>
                                                            <li><a href="javascript:void(0);"><i class="icon ico-print3"></i>Print</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="javascript:void(0);" class="text-danger"><i class="icon ico-remove3"></i>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ button toolbar -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox custom-checkbox nm">
                                                    <input type="checkbox" id="customcheckbox-one2" value="1" data-toggle="selectrow" data-target="tr" data-contextual="warning">
                                                    <label for="customcheckbox-one2"></label>
                                                </div>
                                            </td>
                                            <td><div class="media-object"><img src="/image/avatar/avatar1.jpg" alt="" class="img-circle"></div></td>
                                            <td>Acosta, Isaiah V.</td>
                                            <td>Turkmenistan</td>
                                            <td>ac.mattis@Maecenas.ca</td>
                                            <td>Pharetra Associates</td>
                                            <td>
                                                <div class="progress progress-xs nm">
                                                    <div class="progress-bar progress-bar-danger" style="width:10%;"></div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <!-- button toolbar -->
                                                <div class="toolbar">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-default">Action</button>
                                                        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="javascript:void(0);"><i class="icon ico-pencil"></i>Update</a></li>
                                                            <li><a href="javascript:void(0);"><i class="icon ico-print3"></i>Print</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="javascript:void(0);" class="text-danger"><i class="icon ico-remove3"></i>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ button toolbar -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox custom-checkbox nm">
                                                    <input type="checkbox" id="customcheckbox-one3" value="1" data-toggle="selectrow" data-target="tr" data-contextual="danger">
                                                    <label for="customcheckbox-one3"></label>
                                                </div>
                                            </td>
                                            <td><div class="media-object"><img src="/image/avatar/avatar2.jpg" alt="" class="img-circle"></div></td>
                                            <td>Stuart, Meghan W.</td>
                                            <td>British Indian</td>
                                            <td>enim@erat.com</td>
                                            <td>Bibendum Donec Industries</td>
                                            <td>
                                                <div class="progress progress-xs nm">
                                                    <div class="progress-bar progress-bar-warning" style="width:50%;"></div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <!-- button toolbar -->
                                                <div class="toolbar">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-default">Action</button>
                                                        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="javascript:void(0);"><i class="icon ico-pencil"></i>Update</a></li>
                                                            <li><a href="javascript:void(0);"><i class="icon ico-print3"></i>Print</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="javascript:void(0);" class="text-danger"><i class="icon ico-remove3"></i>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ button toolbar -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox custom-checkbox nm">
                                                    <input type="checkbox" id="customcheckbox-one4" value="1" data-toggle="selectrow" data-target="tr" data-contextual="info">
                                                    <label for="customcheckbox-one4"></label>
                                                </div>
                                            </td>
                                            <td><div class="media-object"><img src="/image/avatar/avatar3.jpg" alt="" class="img-circle"></div></td>
                                            <td>Pugh, Moses V.</td>
                                            <td>Lithuania</td>
                                            <td>diam@sapienmolestie.com</td>
                                            <td>Vel Turpis Foundation</td>
                                            <td>
                                                <div class="progress progress-xs nm">
                                                    <div class="progress-bar progress-bar-warning" style="width:50%;"></div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <!-- button toolbar -->
                                                <div class="toolbar">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-default">Action</button>
                                                        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="javascript:void(0);"><i class="icon ico-pencil"></i>Update</a></li>
                                                            <li><a href="javascript:void(0);"><i class="icon ico-print3"></i>Print</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="javascript:void(0);" class="text-danger"><i class="icon ico-remove3"></i>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ button toolbar -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox custom-checkbox nm">
                                                    <input type="checkbox" id="customcheckbox-one5" value="1" data-toggle="selectrow" data-target="tr" data-contextual="stroke">
                                                    <label for="customcheckbox-one5"></label>
                                                </div>
                                            </td>
                                            <td><div class="media-object"><img src="/image/avatar/avatar4.jpg" alt="" class="img-circle"></div></td>
                                            <td>Lawrence, Donna B.</td>
                                            <td>Togo</td>
                                            <td>arcu@onecfelis.co.uk</td>
                                            <td>Tellus Non Corp.</td>
                                            <td>
                                                <div class="progress progress-xs nm">
                                                    <div class="progress-bar progress-bar-success" style="width:90%;"></div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <!-- button toolbar -->
                                                <div class="toolbar">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-default">Action</button>
                                                        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="javascript:void(0);"><i class="icon ico-pencil"></i>Update</a></li>
                                                            <li><a href="javascript:void(0);"><i class="icon ico-print3"></i>Print</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="javascript:void(0);" class="text-danger"><i class="icon ico-remove3"></i>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ button toolbar -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox custom-checkbox nm">
                                                    <input type="checkbox" id="customcheckbox-one6" value="1" data-toggle="selectrow" data-target="tr">
                                                    <label for="customcheckbox-one6"></label>
                                                </div>
                                            </td>
                                            <td><div class="media-object"><img src="/image/avatar/avatar5.jpg" alt="" class="img-circle"></div></td>
                                            <td>Sharpe, Addison L.</td>
                                            <td>Falkland Islands</td>
                                            <td>enim@dolor.ca</td>
                                            <td>Convallis Ante Lectus Ltd</td>
                                            <td>
                                                <div class="progress progress-xs nm">
                                                    <div class="progress-bar" style="width:70%;"></div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <!-- button toolbar -->
                                                <div class="toolbar">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-default">Action</button>
                                                        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="javascript:void(0);"><i class="icon ico-pencil"></i>Update</a></li>
                                                            <li><a href="javascript:void(0);"><i class="icon ico-print3"></i>Print</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="javascript:void(0);" class="text-danger"><i class="icon ico-remove3"></i>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ button toolbar -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox custom-checkbox nm">
                                                    <input type="checkbox" id="customcheckbox-one7" value="1" data-toggle="selectrow" data-target="tr">
                                                    <label for="customcheckbox-one7"></label>
                                                </div>
                                            </td>
                                            <td><div class="media-object"><img src="/image/avatar/avatar6.jpg" alt="" class="img-circle"></div></td>
                                            <td>Witt, Cullen T.</td>
                                            <td>Kiribati</td>
                                            <td>dui@magna.org</td>
                                            <td>In Inc.</td>
                                            <td>
                                                <div class="progress progress-xs nm">
                                                    <div class="progress-bar progress-bar-success" style="width:100%;"></div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <!-- button toolbar -->
                                                <div class="toolbar">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-default">Action</button>
                                                        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="javascript:void(0);"><i class="icon ico-pencil"></i>Update</a></li>
                                                            <li><a href="javascript:void(0);"><i class="icon ico-print3"></i>Print</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="javascript:void(0);" class="text-danger"><i class="icon ico-remove3"></i>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ button toolbar -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox custom-checkbox nm">
                                                    <input type="checkbox" id="customcheckbox-one8" value="1" data-toggle="selectrow" data-target="tr">
                                                    <label for="customcheckbox-one8"></label>
                                                </div>
                                            </td>
                                            <td><div class="media-object"><img src="/image/avatar/avatar7.jpg" alt="" class="img-circle"></div></td>
                                            <td>Cotton, Christopher S.</td>
                                            <td>Benin</td>
                                            <td>tincidunt@laoreet.edu</td>
                                            <td>A Odio LLC</td>
                                            <td>
                                                <div class="progress progress-xs nm">
                                                    <div class="progress-bar progress-bar-info" style="width:100%;"></div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <!-- button toolbar -->
                                                <div class="toolbar">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-default">Action</button>
                                                        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="javascript:void(0);"><i class="icon ico-pencil"></i>Update</a></li>
                                                            <li><a href="javascript:void(0);"><i class="icon ico-print3"></i>Print</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="javascript:void(0);" class="text-danger"><i class="icon ico-remove3"></i>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ button toolbar -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox custom-checkbox nm">
                                                    <input type="checkbox" id="customcheckbox-one9" value="1" data-toggle="selectrow" data-target="tr">
                                                    <label for="customcheckbox-one9"></label>
                                                </div>
                                            </td>
                                            <td><div class="media-object"><img src="/image/avatar/avatar1.jpg" alt="" class="img-circle"></div></td>
                                            <td>Dudley, Joan I.</td>
                                            <td>Bonaire</td>
                                            <td>magna@sodalesnisi.net</td>
                                            <td>Mi Corp.</td>
                                            <td>
                                                <div class="progress progress-xs nm">
                                                    <div class="progress-bar progress-bar-danger" style="width:2%;"></div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <!-- button toolbar -->
                                                <div class="toolbar">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-default">Action</button>
                                                        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="javascript:void(0);"><i class="icon ico-pencil"></i>Update</a></li>
                                                            <li><a href="javascript:void(0);"><i class="icon ico-print3"></i>Print</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="javascript:void(0);" class="text-danger"><i class="icon ico-remove3"></i>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ button toolbar -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox custom-checkbox nm">
                                                    <input type="checkbox" id="customcheckbox-one10" value="1" data-toggle="selectrow" data-target="tr">
                                                    <label for="customcheckbox-one10"></label>
                                                </div>
                                            </td>
                                            <td><div class="media-object"><img src="/image/avatar/avatar2.jpg" alt="" class="img-circle"></div></td>
                                            <td>Best, Eagan R.</td>
                                            <td>Saint Martin</td>
                                            <td>sodales@odio.org</td>
                                            <td>Nunc Corporation</td>
                                            <td>
                                                <div class="progress progress-xs nm">
                                                    <div class="progress-bar progress-bar-success" style="width:90%;"></div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <!-- button toolbar -->
                                                <div class="toolbar">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-default">Action</button>
                                                        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="javascript:void(0);"><i class="icon ico-pencil"></i>Update</a></li>
                                                            <li><a href="javascript:void(0);"><i class="icon ico-print3"></i>Print</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="javascript:void(0);" class="text-danger"><i class="icon ico-remove3"></i>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ button toolbar -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START panel -->
                        <div class="panel panel-default" id="toolbar-showcase">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-equalizer"></i></span> Toolbar example</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-12"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel toolbar wrapper -->
                            <div class="panel-toolbar-wrapper pl10 pr10 pt5 pb5">
                                <div class="panel-toolbar hide" id="toolbar-toshow">
                                    <button type="button" class="btn btn-sm btn-danger"><i class="ico-remove3"></i></button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-default">Action</button>
                                        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0);"><i class="icon ico-pencil"></i>Update</a></li>
                                            <li><a href="javascript:void(0);"><i class="icon ico-print3"></i>Print</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);" class="text-danger"><i class="icon ico-remove3"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-toolbar text-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-default"><i class="ico-upload22"></i></button>
                                        <button type="button" class="btn btn-sm btn-default"><i class="ico-archive2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel toolbar wrapper -->

                            <!-- panel body with collapse capabale -->
                            <div class="table-responsive panel-collapse pull out">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="3%" class="text-center">
                                                <div class="checkbox custom-checkbox pull-left" data-toggle="tooltip" data-placement="right" title="Check all">
                                                    <input type="checkbox" id="customcheckbox-two0" value="1" data-toggle="checkall" data-target="#toolbar-showcase">
                                                    <label for="customcheckbox-two0"></label>
                                                </div>
                                            </th>
                                            <th width="5%"></th>
                                            <th>Name</th>
                                            <th>Country</th>
                                            <th>Email</th>
                                            <th>Company</th>
                                            <th width="10%">Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="checkbox custom-checkbox nm">
                                                    <input type="checkbox" id="customcheckbox-two1" value="1" data-toggle="selectrow" data-target="tr" data-contextual="info">
                                                    <label for="customcheckbox-two1"></label>
                                                </div>
                                            </td>
                                            <td><div class="media-object"><img src="/image/avatar/avatar.png" alt="" class="img-circle"></div>
                                            </td>
                                            <td>Short, Cheyenne E.</td>
                                            <td>Bangladesh</td>
                                            <td>quis.diam@gravida.net</td>
                                            <td>Tellus Non Corp.</td>
                                            <td>
                                                <div class="progress progress-xs nm">
                                                    <div class="progress-bar progress-bar-danger" style="width:30%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox custom-checkbox nm">
                                                    <input type="checkbox" id="customcheckbox-two2" value="1" data-toggle="selectrow" data-target="tr" data-contextual="info">
                                                    <label for="customcheckbox-two2"></label>
                                                </div>
                                            </td>
                                            <td><div class="media-object"><img src="/image/avatar/avatar1.jpg" alt="" class="img-circle"></div></td>
                                            <td>Acosta, Isaiah V.</td>
                                            <td>Turkmenistan</td>
                                            <td>ac.mattis@Maecenas.ca</td>
                                            <td>Pharetra Associates</td>
                                            <td>
                                                <div class="progress progress-xs nm">
                                                    <div class="progress-bar progress-bar-danger" style="width:10%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox custom-checkbox nm">
                                                    <input type="checkbox" id="customcheckbox-two3" value="1" data-toggle="selectrow" data-target="tr" data-contextual="info">
                                                    <label for="customcheckbox-two3"></label>
                                                </div>
                                            </td>
                                            <td><div class="media-object"><img src="/image/avatar/avatar2.jpg" alt="" class="img-circle"></div></td>
                                            <td>Stuart, Meghan W.</td>
                                            <td>British Indian</td>
                                            <td>enim@erat.com</td>
                                            <td>Bibendum Donec Industries</td>
                                            <td>
                                                <div class="progress progress-xs nm">
                                                    <div class="progress-bar progress-bar-warning" style="width:50%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox custom-checkbox nm">
                                                    <input type="checkbox" id="customcheckbox-two4" value="1" data-toggle="selectrow" data-target="tr" data-contextual="info">
                                                    <label for="customcheckbox-two4"></label>
                                                </div>
                                            </td>
                                            <td><div class="media-object"><img src="/image/avatar/avatar3.jpg" alt="" class="img-circle"></div></td>
                                            <td>Pugh, Moses V.</td>
                                            <td>Lithuania</td>
                                            <td>diam@sapienmolestie.com</td>
                                            <td>Vel Turpis Foundation</td>
                                            <td>
                                                <div class="progress progress-xs nm">
                                                    <div class="progress-bar progress-bar-warning" style="width:50%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox custom-checkbox nm">
                                                    <input type="checkbox" id="customcheckbox-two5" value="1" data-toggle="selectrow" data-target="tr" data-contextual="info">
                                                    <label for="customcheckbox-two5"></label>
                                                </div>
                                            </td>
                                            <td><div class="media-object"><img src="/image/avatar/avatar4.jpg" alt="" class="img-circle"></div></td>
                                            <td>Lawrence, Donna B.</td>
                                            <td>Togo</td>
                                            <td>arcu@onecfelis.co.uk</td>
                                            <td>Tellus Non Corp.</td>
                                            <td>
                                                <div class="progress progress-xs nm">
                                                    <div class="progress-bar progress-bar-success" style="width:90%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
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
                                <h3 class="panel-title">Row hover</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-12"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="table-responsive panel-collapse pull out">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Project Name</th>
                                            <th>Status</th>
                                            <th>Activity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Viverra Company</td>
                                            <td><span class="label label-success">Complete</span></td>
                                            <td class="text-center"><span class="sparklines" sparkType="bar" sparkBarColor="#a0d569">2,4,1,5,3</span></td>
                                        </tr>
                                        <tr>
                                            <td>Sem Elit Ltd</td>
                                            <td><span class="label label-warning">Delay</span></td>
                                            <td class="text-center"><span class="sparklines" sparkType="bar" sparkBarColor="#f1c40f">5,2,1,3,4</span></td>
                                        </tr>
                                        <tr>
                                            <td>Eget Nisi LLP</td>
                                            <td><span class="label label-danger">In Complete</span></td>
                                            <td class="text-center"><span class="sparklines" sparkType="bar" sparkBarColor="#ed5466">2,1,5,3,4</span></td>
                                        </tr>
                                        <tr>
                                            <td>Dictum Nunc Ltd</td>
                                            <td><span class="label label-info">On Hold</span></td>
                                            <td class="text-center"><span class="sparklines" sparkType="bar" sparkBarColor="#ac92ed">3,1,4,5,2</span></td>
                                        </tr>
                                        <tr>
                                            <td>Sagittis Institute</td>
                                            <td><span class="label label-primary ">Others</span></td>
                                            <td class="text-center"><span class="sparklines" sparkType="bar" sparkBarColor="#4fc0e8">1,2,3,4,5</span></td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                <h3 class="panel-title">Striped row</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-12"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="table-responsive panel-collapse pull out">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Income</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><span class="sparklines" sparkType="line" sparkLineColor="#4fc0e8" sparkFillColor="#d6f0fa">1,6,2,9,6,9,6,8,0,8</span></td>
                                            <td>Norman Harmon</td>
                                            <td>$43.34</td>
                                            <td>Mar 3, 2014</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><span class="sparklines" sparkType="line" sparkLineColor="#ac92ed" sparkFillColor="#cdbef4">4,1,6,5,5,3,4,6,1,7</span></td>
                                            <td>Plato Pickett</td>
                                            <td>$65.93</td>
                                            <td>Jan 21, 2014</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><span class="sparklines" sparkType="line" sparkLineColor="#a0d569" sparkFillColor="#dbefc6">3,9,0,1,6,6,6,2,9,1</span></td>
                                            <td>Nathan Paul</td>
                                            <td>$6.07</td>
                                            <td>Feb 4, 2013</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><span class="sparklines" sparkType="line" sparkLineColor="#f1c40f" sparkFillColor="#fbefc0">0,4,6,4,8,5,6,7,5,3</span></td>
                                            <td>Nasim Larson</td>
                                            <td>$11.28</td>
                                            <td>Sep 17, 2013</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><span class="sparklines" sparkType="line" sparkLineColor="#ed5466" sparkFillColor="#f8c0c6">2,6,9,5,4,9,8,5,7,4</span></td>
                                            <td>Odysseus Nguyen</td>
                                            <td>$7.51</td>
                                            <td>Aug 8, 2014</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
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
                                <h3 class="panel-title">Contextual classes - Row</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-12"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="table-responsive panel-collapse pull out">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Account No</th>
                                            <th>Owner</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="text-info">D143BEC6</span></td>
                                            <td>Wing Pugh</td>
                                            <td><span class="text-muted bold">$5,020</span></td>
                                        </tr>
                                        <tr class="active">
                                            <td><span class="text-info">1E8EBC56</span></td>
                                            <td>Harrison Huffman</td>
                                            <td><span class="text-muted bold">$8,626</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-info">09C26998</span></td>
                                            <td>Bernard Dickson</td>
                                            <td><span class="text-muted bold">$9,418</span></td>
                                        </tr>
                                        <tr class="success">
                                            <td><span class="text-info">07D62121</span></td>
                                            <td>Colton Austin</td>
                                            <td><span class="text-muted bold">$8,747</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-info">F1583348</span></td>
                                            <td>Bevis Gilliam</td>
                                            <td><span class="text-muted bold">$5,615</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Contextual classes - Cell</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-12"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="table-responsive panel-collapse pull out">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Account No</th>
                                            <th>Owner</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="active"><span class="text-info">D143BEC6</span></td>
                                            <td>Wing Pugh</td>
                                            <td><span class="text-muted bold">$5,020</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-info">1E8EBC56</span></td>
                                            <td class="success">Harrison Huffman</td>
                                            <td><span class="text-muted bold">$8,626</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-info">09C26998</span></td>
                                            <td>Bernard Dickson</td>
                                            <td class="warning"><span class="text-muted bold">$9,418</span></td>
                                        </tr>
                                        <tr>
                                            <td class="danger"><span class="text-info">07D62121</span></td>
                                            <td>Colton Austin</td>
                                            <td><span class="text-muted bold">$8,747</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-info">F1583348</span></td>
                                            <td class="stroke">Bevis Gilliam</td>
                                            <td><span class="text-muted bold">$5,615</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                </div>
                <!-- START row -->
            </div>
@endsection

@section('footer')
@endsection

