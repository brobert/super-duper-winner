@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
            <table class="table table-striped table-hover table-bordered">
            	<thead>
            		<tr>
                		<th>Święto</th>
                		<th>Rok</th>
                		<th>Miesiąc</th>
                		<th>Dzień</th>
            		</tr>
            	</thead>
            	<tbody>
            		@foreach($freeDays as $fd)
            		<tr>
            			<td>{{$fd->name	}}</td>
            			<td>{{$fd->year or 'Cykliczne'	}}</td>
            			<td>{{$fd->month}}</td>
            			<td>{{$fd->day	}}</td>
            		</tr>
            		@endforeach
            	</tbody>
            </table>
        </div>
    </div>
    <pre>{{print_r($freeDays->toArray(), true)}}</pre>
</div>

@endsection
