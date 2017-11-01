@extends('layouts.admin')

@section('page_title')
Lander.v2 - Bootstrap WebApp & Dashboard
@endsection

@section('asset_css')
        <link rel="stylesheet" href="/plugins/gritter/css/gritter.css">
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/bootbox/js/bootbox.js"></script>
        <script type="text/javascript" src="/plugins/gritter/js/jquery.gritter.js"></script>
        <script type="text/javascript" src="/javascript/backend/components/notification.js"></script>
@endsection

@section('content')
            <div class="container-fluid">

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Alert</h3>
                            </div>
                            <div class="panel-body">
                                <h5 class="semibold mt0">No default class</h5>
                                <p class="mb10">Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense, so you're required to specify a type via contextual class. Choose from success, info, warning, or danger.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="alert alert-dismissable alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Well done!</strong> You successfully read this important alert message.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="alert alert-dismissable alert-info">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="alert alert-dismissable alert-warning">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="alert alert-dismissable alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Alert block</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="alert alert-success fade in">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4 class="semibold">Good job!</h4>
                                            <p class="mb10">Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                                            <button type="button" class="btn btn-success">Take this action</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="alert alert-info fade in">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4 class="semibold">Heads up!</h4>
                                            <p class="mb10">Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                                            <button type="button" class="btn btn-info">Take this action</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="alert alert-warning fade in">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4 class="semibold">Warning!</h4>
                                            <p class="mb10">Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                                            <button type="button" class="btn btn-warning">Take this action</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="alert alert-danger fade in">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4 class="semibold">Oh snap! You got an error!</h4>
                                            <p class="mb10">Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                                            <button type="button" class="btn btn-danger">Take this action</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Jquery Gritter</h3>
                            </div>
                            <div class="panel-body">
                                <p>JavaScript notifications for Bootstrap or jQuery UI.</p>
                                <button class="btn btn-default mb5" id="add-sticky">Sticky Notice</button>
                                <button class="btn btn-default mb5" id="add-regular">Regular Notice</button>
                                <button class="btn btn-default mb5" id="add-max">Max 3 Notice</button>
                                <button class="btn btn-default mb5" id="add-image">With Image</button>
                                <button class="btn btn-default mb5" id="add-light">Light Notice</button>
                            </div>
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Bootstrap Modal</h3>
                            </div>
                            <div class="panel-body">
                                <button class="btn btn-primary mb5" data-toggle="modal" data-target="#bs-modal-sm">Small Modal</button>
                                <button class="btn btn-primary mb5" data-toggle="modal" data-target="#bs-modal">Default Modal</button>
                                <button class="btn btn-primary mb5" data-toggle="modal" data-target="#bs-modal-lg">Large Modal</button>
                            </div>
                            <div class="panel-body">
                                <h5 class="semibold mt0">Bootstrap modal via bootbox</h5>
                                <button class="btn btn-sm btn-teal mb5" id="bootbox-alert">Alert</button>
                                <button class="btn btn-sm btn-teal mb5" id="bootbox-confirm">Confirm</button>
                                <button class="btn btn-sm btn-teal mb5" id="bootbox-prompt">Prompt</button>
                                <button class="btn btn-sm btn-teal mb5" id="bootbox-custom">Custom</button>
                            </div>
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START modal-sm -->
                <div id="bs-modal-sm" class="modal fade">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="ico-shield3 mb15 mt15" style="font-size:36px;"></div>
                                <h3 class="semibold modal-title text-success">Shield Activated</h3>
                                <p class="text-muted">Excepteur sint occaecat cupidatat non proident.</p>
                            </div>
                            <div class="modal-body">
                                <h4 class="semibold mt0">Text in a modal</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                <!--/ END modal-sm -->

                <!-- START modal -->
                <div id="bs-modal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class=" ico-gun-ban mb15 mt15" style="font-size:36px;"></div>
                                <h3 class="semibold modal-title text-danger">No Gun Allowed</h3>
                                <p class="text-muted">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                            </div>
                            <div class="modal-body">
                                <h4 class="semibold mt0">Text in a modal</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                <!--/ END modal -->

                <!-- START modal-lg -->
                <div id="bs-modal-lg" class="modal fade">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="ico-rocket mb15 mt15" style="font-size:36px;"></div>
                                <h3 class="semibold modal-title text-primary">Rocket Launch</h3>
                                <p class="text-muted">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            </div>
                            <div class="modal-body">
                                <h4 class="semibold mt0">Text in a modal</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                <!--/ END modal-lg -->
            </div>
@endsection

