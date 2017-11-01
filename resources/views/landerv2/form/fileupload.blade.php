@extends('layouts.admin')

@section('page_title')
Lander.v2 - Bootstrap WebApp & Dashboard
@endsection

@section('asset_css')
        <link rel="stylesheet" href="/plugins/fileupload/css/fileupload.css">
@endsection

@section('asset_css_theme')
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/fileupload/js/vendor/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="/plugins/fileupload/js/vendor/load-image.js"></script>
        <script type="text/javascript" src="/plugins/fileupload/js/vendor/load-image-meta.js"></script>
        <script type="text/javascript" src="/plugins/fileupload/js/vendor/load-image-exif.js"></script>
        <script type="text/javascript" src="/plugins/fileupload/js/vendor/load-image-ios.js"></script>
        <script type="text/javascript" src="/plugins/fileupload/js/vendor/canvas-to-blob.js"></script>
        <script type="text/javascript" src="/plugins/fileupload/js/vendor/jquery.iframe-transport.js"></script>
        <script type="text/javascript" src="/plugins/fileupload/js/jquery.fileupload.js"></script>
        <script type="text/javascript" src="/plugins/fileupload/js/jquery.fileupload-process.js"></script>
        <script type="text/javascript" src="/plugins/fileupload/js/jquery.fileupload-image.js"></script>
        <script type="text/javascript" src="/plugins/fileupload/js/jquery.fileupload-audio.js"></script>
        <script type="text/javascript" src="/plugins/fileupload/js/jquery.fileupload-video.js"></script>
        <script type="text/javascript" src="/plugins/fileupload/js/jquery.fileupload-validate.js"></script>
        <script type="text/javascript" src="/plugins/fileupload/js/jquery.fileupload-ui.js"></script>
        <script type="text/javascript" src="/javascript/backend/forms/fileupload.js"></script>
@endsection

@section('content')
            <div class="container-fluid">

                <!-- START Row -->
                <div class="row">
                    <div class="col-md-12">
                        <p class="lead semibold">File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery. Supports cross-domain, chunked and resumable file uploads and client-side image resizing.</p>
                    </div>
                </div>
                <!--/ END Row -->

                <!-- START Row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START Panel -->
                        <div class="panel panel-default" id="basic-uploader">
                            <!-- panel header/heading -->
                            <div class="panel-heading">
                                <h3 class="panel-title">File Uploader</h3>
                            </div>
                            <!--/ panel header/heading -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <!-- error message -->
                                <div class="alert alert-info">This uploader will return an error since there is no upload logic. You need to code your own upload logic.</div>

                                <!-- The global progress bar -->
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-success"></div>
                                </div>

                                <!-- The fileinput-button span is used to style the file input field as button -->
                                <div class="mb15">
                                    <span class="btn btn-primary fileinput-button">
                                        <i class="glyphicon glyphicon-plus"></i>
                                        <span>Add files...</span>
                                        <!-- The file input field used as target for the file upload widget -->
                                        <input type="file" name="files[]" multiple>
                                    </span>
                                </div>

                                <!-- dropzone -->
                                <div class="dropzone table-layout well mb0" style="box-shadow:none;border-style:dashed;height:200px;">
                                    <div class="col-xs-11 text-center">
                                        <h4 class="text-muted"><i class="ico-file-plus2 mr5"></i> Drag and drop your file here!</h4>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body -->

                            <!-- file list -->
                            <table class="table table-striped table-hovered upload-lists">
                                <tbody></tbody>
                            </table>
                        </div>
                        <!--/ END Panel -->
                    </div>
                </div>
                <!--/ END Row -->
            </div>
@endsection

@section('footer')
@endsection

