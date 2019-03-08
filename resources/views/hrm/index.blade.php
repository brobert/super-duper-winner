@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <!-- START row -->
    <div class="row">
        <!-- Left / Top Side -->
        <div class="col-lg-3">
            <!-- tab menu -->
            <ul class="list-group list-group-tabs">
                @foreach($worklogMonths as $key => $data)
                    <li class="list-group-item {{$loop->first ? 'active' : ''}}"><a href="#{{$key}}" data-toggle="tab"><i class="ico-calendar mr5"></i> {{$key}}</a></li>
                @endforeach
            </ul>
        </div>
        <!--/ Left / Top Side -->

        <!-- Left / Bottom Side -->
        <div class="col-lg-9">
            <!-- START Tab-content -->
            <div class="tab-content">
                <!-- tab-pane: worklog -->
                @foreach($worklogMonths as $key => $dayCnt)
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
        </div>
        <!--/ Left / Bottom Side -->
    </div>
    <!--/ END row -->
</div>

@endsection
