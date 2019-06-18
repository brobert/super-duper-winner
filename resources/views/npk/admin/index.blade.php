@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-4">
            <div class=" widget panel panel-default">
                <div class="panel-body">
                    Admin!
                </div>
            </div>
        </div>

        <div class="col-md-4">
            @include('npk/widgets/userPayment', ['user_payment' => 123.456])
        </div>
    </div>
</div>
@endsection
