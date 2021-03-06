@extends('layouts.admin')

@section('page_title')
Lander.v2 - Bootstrap WebApp & Dashboard
@endsection

@section('asset_css')
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="/plugins/summernote/css/summernote.css">
@endsection

@section('asset_css_theme')
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/summernote/js/summernote.js"></script>
        <script type="text/javascript" src="/javascript/backend/forms/wysiwyg.js"></script>
@endsection

@section('content')
            <div class="container-fluid">

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START Panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title ellipsis"><i class="ico-pen4"></i> Article form</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row visible-xs">
                                    <div class="col-md-12">
                                        <div class="alert alert-dismissable alert-warning">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Warning!</strong> It's not recommended to use this editor in Touch device.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input name="title" type="text" class="form-control" placeholder="Post title">
                                        </div>
                                        <div class="col-sm-6">
                                            <input name="alias" type="text" class="form-control" placeholder="Alias title">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <span class="checkbox custom-checkbox">
                                                <input type="checkbox" id="customcheckbox1" value="1">
                                                <label for="customcheckbox1">&nbsp;&nbsp;Publish on save?</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Summernote -->
                            <div class="summernote">Write your article...</div>
                            <!--/ Summernote -->
                            <div class="panel-footer">
                                <button class="btn btn-primary">Save article</button>
                            </div>
                        </div>
                        <!--/ END Panel -->
                    </div>
                </div>
                <!--/ END row -->
            </div>
@endsection

@section('footer')
@endsection

