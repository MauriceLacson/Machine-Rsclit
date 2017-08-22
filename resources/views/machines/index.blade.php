@extends('layouts.master')
@section('title', 'Machines')
@section('content')
<style type="text/css">
	thead th {
		background-color: gray;
		color: white;
	}
</style>
	<div class="container">
		<div>
		@if ($machines->isEmpty())
			<p><a href="/create"><h3>Please Update a machine</h3></a></p>
		@else	
			<table class="table table-hover">
			<thead>
				<tr>
					<th>
						Machine No
					</th>
					<th>
						Date Last Routine Sclit
					</th>
					<th>
						Date Next Routine Sclit
					</th>
				</tr>
			</thead>

			<tbody>
			@foreach ($machines as $machine)
				<tr>
					<td>
						{{ $machine->machine_no }}
					</td>
				
					<td>
						{{ $machine->date_finished }}
					</td>
					<td>
						{{ $machine->date_next_rsclit }}
					</td>
				</tr>
			@endforeach
			</tbody>
			</table>
		@endif
		</div>
	</div>

@endsection