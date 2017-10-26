<div class="row">
    <div class="col-sm-12">
        <!-- START panel -->
        <div class="panel ">
            <!-- panel-toolbar -->
            <div class="panel-heading pt10">
                <div class="panel-toolbar">
                    <h5 class="semibold nm ellipsis">{{ trans($stats['token']) }}</h5>
                </div>
            </div>
            <!--/ panel-toolbar -->
            <!-- panel-body -->
            <div class="panel-body pt0">
                <div class="chart mt10" id="chart-audience" style="height:250px;" data-url="/api/flot/audience"></div>
            </div>
            <!--/ panel-body -->
            <!-- panel-footer -->
            <div class="panel-footer hidden-xs">
                <ul class="nav nav-section nav-justified">
                    @foreach ($stats['data'] as $stat)
                    <li>
                        <div class="section">
                            <h4 class="bold text-default mt0 mb5" data-toggle="counterup">{{ number_format($stat['point'], 0)}}</h4>
                            <p class="nm text-muted">
                                <span class="semibold">{{ trans('widgets.web_stats.'.$stat['name']) }}</span>
                                <span class="text-muted mr5 ml5">•</span>
                                <span class="text-{{ $stat['percent'] > 0? 'success': 'danger' }}">
                                    <i class="ico-arrow-{{ $stat['percent'] > 0? 'up': 'down' }}4"></i>
                                    {{ number_format($stat['percent'], 1)}}%
                                </span>
                            </p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!--/ panel-footer -->
        </div>
        <!--/ END panel -->
    </div>
</div>