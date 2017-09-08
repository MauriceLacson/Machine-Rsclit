@extends('layouts.master')
@section('title', 'Machines')
@section('content')

<style type="text/css">
	thead th {
    background-color: gray!important;
    color: white;
}
</style>
<div class="container">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Machine No</th>
				<th>Date Last Rsclit</th>
				<th>Date Next Rsclit</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($machines as $machine)
			<tr>
				<td>{{ $machine->machine_no }}</td>
				<td>{{ $machine->date_finished }}</td>
				<td>{{ $machine->date_next_rsclit }}</td>
			</tr>
		@endforeach
	
		</tbody>
	</table>
</div>
@endsection