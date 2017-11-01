@extends('layouts.admin')

@section('page_title')
Lander.v2 - Bootstrap WebApp & Dashboard
@endsection

@section('asset_css')
        <link rel="stylesheet" href="/plugins/xeditable/css/xeditable.css">
        <link rel="stylesheet" href="/plugins/xeditable/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css">
@endsection

@section('asset_css_theme')
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/xeditable/js/bootstrap-editable.js"></script>
        <script type="text/javascript" src="/plugins/xeditable/inputs-ext/address/address.js"></script>
        <script type="text/javascript" src="/plugins/xeditable/inputs-ext/typeaheadjs/lib/typeahead.js"></script>
        <script type="text/javascript" src="/plugins/xeditable/inputs-ext/typeaheadjs/typeaheadjs.js"></script>
        <script type="text/javascript" src="/javascript/backend/forms/xeditable.js"></script>
@endsection

@section('content')
            <div class="container-fluid">
                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-equalizer"></i></span> X-editable example</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- table responsive -->
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="40%">Inputs Types</th>
                                            <th>Example</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>text</td>
                                            <td><a href="#" id="xe_username" data-type="text" data-pk="1">awesome</a></td>
                                        </tr>
                                        <tr>
                                            <td>textarea</td>
                                            <td><a href="#" id="xe_comments" data-type="textarea" data-pk="1">awesome comment!</a></td>
                                        </tr>
                                        <tr>
                                            <td>select</td>
                                            <td><a href="#" id="xe_status" data-type="select" data-pk="1" data-title="Select status"></a></td>
                                        </tr>
                                        <tr>
                                            <td>checklist</td>
                                            <td><a href="#" id="xe_checklist" data-type="checklist" data-pk="1" data-title="Select options"></a></td>
                                        </tr>
                                        <tr>
                                            <td>combodate</td>
                                            <td><a href="#" id="xe_combodate" data-type="combodate" data-pk="1" data-value="1984-05-15" data-title="Select date"></a></td>
                                        </tr>
                                        <tr>
                                            <td>dateui</td>
                                            <td><a href="#" id="xe_dateui" data-type="date" data-pk="1" data-title="Select date">15/05/1984</a></td>
                                        </tr>
                                        <tr>
                                            <td>typeahead</td>
                                            <td><a href="#" id="xe_typehead" data-type="typeaheadjs" data-pk="1" data-title="Input country"></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/ table responsive -->
                            <hr class="nm">
                            <div class="panel-body bgcolor-white">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="note note-rounded note-default">
                                            for more example usage, please visit the <a href="/http://vitalets.github.io/x-editable/docs.html#inputs" style="text-decoration:underline;">x-editable</a> plugin site.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ END row -->
            </div>
@endsection

@section('footer')
@endsection

