<div class="panel panel-default">
    <div class="panel-heading">
        <h5 class="panel-title"><i class="ico-globe mr5"></i>@lang('pages.home.traffic.title')</h5>
    </div>
    <ul class="list-group">

        <li class="list-group-item">
            @lang('pages.home.traffic.visits')
            <span class="semibold pull-right">{{number_format($traffic['visits'])}}</span>
        </li>
        <li class="list-group-item">
            @lang('pages.home.traffic.u_visits')
            <span class="semibold pull-right">{{number_format($traffic['u_visits'])}}</span>
        </li>

        <li class="list-group-item">
            <p>@lang('pages.home.traffic.sources')</p>
            @foreach($traffic['sources'] as $source )
            <p class="mb5 clearfix">
                <i class="ico-circle mr5 text-success"></i>{{ $source['name'] }}
                <span class="pull-right semibold">{{number_format($source['value'])}}</span>
            </p>
            @endforeach
        </li>
    </ul>
</div>