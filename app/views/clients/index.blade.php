@extends('layouts.master')

@section('content')

<div class="row">

	<div class="col-md-9">
	
		<!-- List all clients -->

		<h2>All Clients</h1>		

		<table class="table table-striped table-hover">
		
			<thead>
			
				<tr>

					<th>{{ sort_table_by('clients', 'name', 'Name') }}</th>		
				
					<th>Address</th>
				
					<th>Post Code</th>
				
					<th>Phone Number</th>
					
					<th class="text-center">Importance</th>
			
				</tr>
		
			</thead>
		
			@foreach($clients as $client)
			
				<tr>
				
					<td>{{ link_to_route('clients.edit', $client->name, $client->id) }}</td>
					
					<td>{{ $client->address }}</td>
					
					<td>{{ $client->post_code }}</td>
					
					<td>{{ $client->main_phone }}</td>
					
					<td class="text-center">{{ $client->importance }}</td>
				
				</tr>
			
			@endforeach
		
		</table>
	
	</div>
	
	<div class="col-md-3">
		
		<!-- Create A New client -->
		
		<h2>Add New Client</h2>
		
		{{ Form::open(['method' => 'POST', 'route' => 'clients.store']) }}
		
			@include('clients/partials/_form')	
		
		{{ Form::close() }}
	
	</div>

</div>

@stop