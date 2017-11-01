@extends('layouts.admin')

@section('page_title')
Lander.v2 - Bootstrap WebApp & Dashboard
@endsection

@section('asset_css')
        <link rel="stylesheet" href="/plugins/jcrop/css/jcrop.css">
@endsection

@section('asset_css_theme')
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/jcrop/js/jquery.Jcrop.js"></script>
        <script type="text/javascript" src="/javascript/backend/forms/imagecrop.js"></script>
@endsection

@section('content')
            <div class="container-fluid">

                <!-- START Row -->
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <!-- START Panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Jcrop API</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <button class="btn btn-default btn-block mb10" id="set-select">setSelect</button>
                                <button class="btn btn-default btn-block mb10" id="animated-to">animatedTo</button>
                                <button class="btn btn-default btn-block mb10" id="release">Release</button>
                                <button class="btn btn-default btn-block mb10" id="disable">Disable</button>
                                <button class="btn btn-default btn-block mb10 hide" id="enable">Enable</button>
                                <button class="btn btn-danger btn-block" id="unhook">Destroy!</button>
                                <button class="btn btn-success btn-block hide" id="rehook">Attach!</button>
                            </div>
                            <!--/ panel body -->
                            <!-- table -->
                            <table class="table">
                                <thead></thead>
                                <tbody>
                                    <tr>
                                        <td>Aspect ratio</td>
                                        <td class="text-right">
                                            <label class="switch switch-sm switch-primary">
                                                <input type="checkbox" id="ar_lock">
                                                <span class="switch"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>minSize/maxSize setting</td>
                                        <td class="text-right">
                                            <label class="switch switch-sm switch-primary">
                                                <input type="checkbox" id="size_lock">
                                                <span class="switch"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Allow new selections</td>
                                        <td class="text-right">
                                            <label class="switch switch-sm switch-primary">
                                                <input type="checkbox" id="can_click">
                                                <span class="switch"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Selection can be moved</td>
                                        <td class="text-right">
                                            <label class="switch switch-sm switch-primary">
                                                <input type="checkbox" id="can_move">
                                                <span class="switch"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Resizable selection</td>
                                        <td class="text-right">
                                            <label class="switch switch-sm switch-primary">
                                                <input type="checkbox" id="can_size">
                                                <span class="switch"></span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--/ table -->
                        </div>
                        <!--/ END Panel -->
                    </div>

                    <div class="col-md-9 col-sm-8">
                        <!-- thumbnail -->
                        <div class="thumbnail thumbnail-album">
                            <!-- media -->
                            <div class="media">
                                <!--/ indicator -->
                                <img src="/image/background/background1.jpg" alt="Cover" width="100%" id="target">
                            </div>
                            <!--/ media -->
                            <!-- caption -->
                            <div class="caption pa15">
                                <h4 class="semibold mt0 mb5">Jcrop Image Sample</h4>
                                <p class="mb0 text-muted">Click below button to change image</p>
                            </div>
                            <!--/ caption -->
                            <div class="pa15" id="change-background">
                                <button class="btn btn-default active" data-background="/image/background/background1.jpg">#background1</button>
                                <button class="btn btn-default" data-background="/image/background/background2.jpg">#background2</button>
                                <button class="btn btn-default" data-background="/image/background/background3.jpg">#background3</button>
                            </div>
                        </div>
                        <!--/ thumbnail -->
                    </div>
                </div>
                <!--/ END Row -->
            </div>
@endsection

@section('footer')
@endsection

