@extends('layouts.admin')

@section('page_title')
Lander.v2 - Bootstrap WebApp & Dashboard
@endsection

@section('asset_css')
        <link rel="stylesheet" href="/plugins/jquery-ui/css/jquery-ui.css">
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/jquery-ui/js/jquery-ui.js"></script>
        <script type="text/javascript" src="/javascript/backend/components/sortable.js"></script>
@endsection

@section('content')
            <div class="container-fluid">

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">To arrange sortable items as a grid, give them identical dimensions and float them using CSS.</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row" id="sortable-panel">
                    <div class="col-md-3 sortable">
                        <!-- START panel -->
                        <div class="panel panel-primary">
                            <!-- panel heading/header -->
                            <div class="panel-heading handle">
                                <h3 class="panel-title"><i class="ico-queen mr5"></i> Panel</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->

                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->

                        <!-- START panel -->
                        <div class="panel panel-teal">
                            <!-- panel heading/header -->
                            <div class="panel-heading handle">
                                <h3 class="panel-title"><i class="ico-queen mr5"></i> Panel</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->

                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                    <div class="col-md-3 sortable">
                        <!-- START panel -->
                        <div class="panel panel-success">
                            <!-- panel heading/header -->
                            <div class="panel-heading handle">
                                <h3 class="panel-title"><i class="ico-queen mr5"></i> Panel</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->

                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->

                        <!-- START panel -->
                        <div class="panel panel-inverse">
                            <!-- panel heading/header -->
                            <div class="panel-heading handle">
                                <h3 class="panel-title"><i class="ico-queen mr5"></i> Panel</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->

                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                    <div class="col-md-3 sortable">
                        <!-- START panel -->
                        <div class="panel panel-danger">
                            <!-- panel heading/header -->
                            <div class="panel-heading handle">
                                <h3 class="panel-title"><i class="ico-queen mr5"></i> Panel</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn demo" data-toggle="panelrefresh"><i class="reload"></i></button>
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->

                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->

                            <!-- Loading indicator -->
                            <div class="indicator"><span class="spinner"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                        <!--/ END panel -->

                        <!-- START panel -->
                        <div class="panel panel-primary">
                            <!-- panel heading/header -->
                            <div class="panel-heading handle">
                                <h3 class="panel-title"><i class="ico-queen mr5"></i> Panel</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->

                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                    <div class="col-md-3 sortable">
                        <!-- START panel -->
                        <div class="panel panel-info">
                            <!-- panel heading/header -->
                            <div class="panel-heading handle">
                                <h3 class="panel-title"><i class="ico-queen mr5"></i> Panel</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->

                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->

                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading handle">
                                <h3 class="panel-title"><i class="ico-queen mr5"></i> Panel</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->

                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <hr><!-- horizontal line -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">Reorder elements in a list using the mouse.</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START sortable list -->
                        <ul class="list-unstyled" id="sortable-list">
                            <li class="panel mb5">
                                <div class="panel-heading nm bdr0 handle">
                                    <h3 class="panel-title"><i class="ico-grid2 mr5"></i> Panel Sortable #1</h3>
                                </div>
                            </li>
                            <li class="panel mb5">
                                <div class="panel-heading nm bdr0 handle">
                                    <h3 class="panel-title"><i class="ico-grid2 mr5"></i> Panel Sortable #2</h3>
                                </div>
                            </li>
                            <li class="panel mb5">
                                <div class="panel-heading nm bdr0 handle">
                                    <h3 class="panel-title"><i class="ico-grid2 mr5"></i> Panel Sortable #3</h3>
                                </div>
                            </li>
                            <li class="panel mb5">
                                <div class="panel-heading nm bdr0 handle">
                                    <h3 class="panel-title"><i class="ico-grid2 mr5"></i> Panel Sortable #4</h3>
                                </div>
                            </li>
                            <li class="panel mb5">
                                <div class="panel-heading nm bdr0 handle">
                                    <h3 class="panel-title"><i class="ico-grid2 mr5"></i> Panel Sortable #5</h3>
                                </div>
                            </li>
                        </ul>
                        <!--/ END sortable list -->
                    </div>
                </div>
                <!--/ END row -->
            </div>
@endsection

