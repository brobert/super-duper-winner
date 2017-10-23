@extends('landerv2.layouts.admin')

@section('page_title')
Lander.v2 - Bootstrap WebApp & Dashboard
@endsection

@section('asset_css')
@endsection

@section('asset_css_theme')
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
@endsection

@section('content')
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold">Invoice</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <a href="/page/invoice/printable.html" target="_new" class="btn btn-primary"><i class="ico-print3"></i> Print</a>
                            &nbsp;<span class="text-muted semibold">or</span>&nbsp;
                            <div class="btn-group">
                                <button type="button" class="btn btn-default"><i class="ico-screwdriver2"></i></button>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                    <li><a href="javascript:void(0);">Send</a></li>
                                    <li><a href="javascript:void(0);">Save</a></li>
                                    <li><a href="javascript:void(0);">Forward</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-layout">
                            <!-- Left / Bottom Side -->
                            <div class="col-lg-12 panel">
                                <!-- panel body -->
                                <div class="panel-body text-right">
                                    <h4 class="semibold nm">John Doe</h4>
                                    <p class="text-muted nm">ABCD Incorporated</p>
                                    <p class="text-muted nm">France</p>
                                </div>
                                <!-- panel body -->
                                <hr class="nm">
                                <!-- panel body -->
                                <div class="panel-body">
                                    <ul class="list-table">
                                        <li class="text-left">
                                            <h4 class="semibold nm">Invoice / December Period</h4>
                                            <p class="semibold text-muted nm">December 22nd, 2014 - October 8th, 2014</p>
                                        </li>
                                        <li class="text-right">
                                            <p class="semibold text-primary nm">Invoice ID : #541141</p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- panel body -->
                                <!-- panel table -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="5%"></th>
                                                <th>Task Description</th>
                                                <th width="15%" class="text-center">Rate</th>
                                                <th width="15%" class="text-center">Hours</th>
                                                <th width="15%" class="text-center">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="valign-top text-center">1.</td>
                                                <td>
                                                    <h5 class="semibold mt0 mb5">Website design &amp; development</h5>
                                                    <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</span>
                                                </td>
                                                <td class="valign-top text-center"><span class="bold">$50</span></td>
                                                <td class="valign-top text-center"><span class="bold">50</span></td>
                                                <td class="valign-top text-center"><span class="text-primary bold">$1500</span></td>
                                            </tr>
                                            <tr>
                                                <td class="valign-top text-center">2.</td>
                                                <td>
                                                    <h5 class="semibold mt0 mb5">Branding</h5>
                                                    <span class="text-muted">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                                                </td>
                                                <td class="valign-top text-center"><span class="bold">$50</span></td>
                                                <td class="valign-top text-center"><span class="bold">20</span></td>
                                                <td class="valign-top text-center"><span class="text-primary bold">$1000</span></td>
                                            </tr>
                                            <tr>
                                                <td class="valign-top text-center">3.</td>
                                                <td>
                                                    <h5 class="semibold mt0 mb5">Surfboard design</h5>
                                                    <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</span>
                                                </td>
                                                <td class="valign-top text-center"><span class="bold">$60</span></td>
                                                <td class="valign-top text-center"><span class="bold">100</span></td>
                                                <td class="valign-top text-center"><span class="text-primary bold">$6000</span></td>
                                            </tr>
                                            <tr>
                                                <td class="valign-top text-center">4.</td>
                                                <td>
                                                    <h5 class="semibold mt0 mb5">Print design</h5>
                                                    <span class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span>
                                                </td>
                                                <td class="valign-top text-center"><span class="bold">$20</span></td>
                                                <td class="valign-top text-center"><span class="bold">20</span></td>
                                                <td class="valign-top text-center"><span class="text-primary bold">$40</span></td>
                                            </tr>
                                            <tr>
                                                <td class="valign-top text-center">5.</td>
                                                <td>
                                                    <h5 class="semibold mt0 mb5">Marketing setup / coaching</h5>
                                                    <span class="text-muted">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                                </td>
                                                <td class="valign-top text-center"><span class="bold">$80</span></td>
                                                <td class="valign-top text-center"><span class="bold">20</span></td>
                                                <td class="valign-top text-center"><span class="text-primary bold">$1600</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--/ panel table -->
                                <!-- panel footer -->
                                <div class="panel-footer">
                                    <ul class="list-table pa10">
                                        <li>
                                            <h5 class="semibold nm">SUB TOTAL</h5>
                                        </li>
                                        <li class="text-right">
                                            <h3 class="semibold nm">$10,140.00</h3>
                                        </li>
                                    </ul>
                                </div>
                                <!-- panel footer -->
                                <!-- panel footer -->
                                <div class="panel-footer">
                                    <ul class="list-table pa10">
                                        <li>
                                            <h5 class="semibold nm">TAXES &amp; FEES</h5>
                                        </li>
                                        <li class="text-right">
                                            <h3 class="semibold nm">$60.00</h3>
                                        </li>
                                    </ul>
                                </div>
                                <!-- panel footer -->
                                <!-- panel footer -->
                                <div class="panel-footer">
                                    <ul class="list-table pa10">
                                        <li>
                                            <h5 class="semibold nm">TOTAL PAYABLE</h5>
                                        </li>
                                        <li class="text-right">
                                            <h3 class="semibold nm text-success">$10,200.00</h3>
                                        </li>
                                    </ul>
                                </div>
                                <!-- panel footer -->
                            </div>
                            <!--/ Left / Bottom Side -->
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <hr><!-- horizontal line -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text-muted text-center mb0"><strong>Note: </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="text-center"><a href="#" class="text-center">www.site.com</a></p>
                    </div>
                </div>
                <!--/ END row -->
            </div>
@endsection

@section('footer')
@endsection

