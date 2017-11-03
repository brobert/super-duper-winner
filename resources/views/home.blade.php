@extends('layouts.blank')

@section('page_title')
Lander.v2 - Dashboard
@endsection

@section('asset_css')
@endsection

@section('asset_css_theme')
@endsection

@section('asset_js')
@endsection

@section('content')
<section id="main" role="main">
    <div class="container-fluid">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <!-- START Panel pricing -->
                    <div class="panel panel-default">
                        <a href="{{route('landerv2')}}">
                            <!-- panel heading -->
                            <div class="panel-heading text-center pa15" style="min-height:100px;">
                                <h4 class="semibold mt0">
                                    Landerv2
                                </h4>
                            </div>
                            <!-- panel heading -->
                            <!-- panel body -->
                            <div class="panel-body text-center" style="margin-top:-50px;">
                                <img class="img-circle img-bordered" src="/image/logo/logo-figure-inverse.png" alt="" width="75px" height="75px">
                            </div>
                            <!--/ panel body -->
                        </a>
                    </div>
                    <!--/ END Panel pricing -->
                </div>

                <div class="col-md-6">
                    <!-- START Panel pricing -->
                    <div class="panel panel-default">
                        <a href="{{route('npk')}}">
                            <!-- panel heading -->
                            <div class="panel-heading text-center pa15" style="min-height:100px;">
                                <h4 class="semibold mt0">
                                    Npk
                                </h4>
                            </div>
                            <!-- panel heading -->
                            <!-- panel body -->
                            <div class="panel-body text-center" style="margin-top:-50px;">
                                <img class="img-circle img-bordered" src="/image/logo/npk.png" alt="" width="75px" height="75px">
                            </div>
                            <!--/ panel body -->
                        </a>
                    </div>
                    <!--/ END Panel pricing -->
                </div>

            </div>
        </div>
    </div>
    <!-- START To Top Scroller -->
    <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="80%"><i class="ico-angle-up"></i></a>
    <!--/ END To Top Scroller -->
</section>
@endsection

@section('footer')
@endsection

