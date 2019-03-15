@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <!-- START row -->
    <div class="row">
        <!-- Left / Top Side -->
        <div class="col-lg-3">
            <!-- panel group -->
            <div class="panel-group panel-group-compact" id="accordion1">
                @foreach($yearRange as $year => $months)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse-{{$year}}" class="collapsed">
                                <span class="plus mr5"></span> {{$year}}
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-{{$year}}" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                @foreach($months as $month)
                                    <li>
                                        <a href="{{route('hrm.worklog', ['month' => $month, 'year' => $year])}}" alt=""> {{$year}}-{{str_pad($month, 2, '0', STR_PAD_LEFT)}} </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!--/ panel group -->
        </div>
        <!--/ Left / Top Side -->

        <!-- Left / Bottom Side -->
        <div class="col-lg-9">
            <!-- START Tab-content -->
            <div class="panel panel-default">
                <!-- tab-pane: worklog -->
                @foreach([] as $key => $dayCnt)
                <div class="tab-pane {{$loop->first ? 'active' : ''}}" id="{{$key}}">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($day = 1; $day <= $dayCnt; $day++)
                            <tr>
                                <td>{{$day}}</td>
                                <td>{{$key}}-{{$day}}</td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                    <pre>{{print_r($worklogMonths, true)}}</pre>
                </div>
                <!--/ tab-pane: worklog -->
                @endforeach

            </div>
            <!--/ END Tab-content -->
            <pre>{{print_r($yearRange, true)}}</pre>

        </div>
        <!--/ Left / Bottom Side -->
    </div>
    <!--/ END row -->
</div>

@endsection
