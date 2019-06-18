<div class="panel">
    <div class="panel-body">
        <h4 class="semibold nm"><i class="ico-dollar mr5"></i>@lang('pages.home.today_income.title')</h4>
        <h2 class="thin mt5 text-muted">
            {{ ( $user_payment > 0 )? '+': '-'}}
            <span data-toggle="counterup">{{number_format(abs($user_payment))}}</span>
        </h2>
        <!-- chart -->
        <div class="chart" style="height:120px;" id="stats1" data-url="{{ route('api.flot', ['today_income'])}}"></div>
        <!--/ chart -->
    </div>
</div>