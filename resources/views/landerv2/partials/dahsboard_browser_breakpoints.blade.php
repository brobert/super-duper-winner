<div class="row">
    <div class="col-lg-12">
        <!-- START panel -->
        <div class="panel panel-default">
            <!-- panel heading/header -->
            <div class="panel-heading">
                <h3 class="panel-title ellipsis"><i class="ico-chrome mr5"></i>@lang('widgets.browser_breakpoints.name')</h3>
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
                <table class="table">
                    <thead>
                        <tr>
                            <th>@lang('widgets.browser_breakpoints.browser_name')</th>
                            <th>@lang('widgets.browser_breakpoints.browser_engine')</th>
                            <th>@lang('widgets.browser_breakpoints.platform')</th>
                            <th>@lang('widgets.browser_breakpoints.activity')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($breakpoints as $breakpoint)
                        <tr>
                            <td><span class="semibold text-accent">{{$breakpoint['name']}}</span></td>
                            <td>{{$breakpoint['engine']}}</td>
                            <td>{{$breakpoint['platform']}}</td>
                            <td>
                                <span class="sparklines" sparkType="bar" sparkBarColor="#ed5466">
                                    {{ implode(', ', array_get($breakpoint, 'activities.history'))}}
                                </span>
                                <span class="text-muted mr5 ml5">•</span>
                                <span class="semibold text-muted">{{array_get($breakpoint, 'activities.value')}}%</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--/ panel body with collapse capabale -->
        </div>
        <!--/ END panel -->
    </div>
</div>