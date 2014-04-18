@extends('layouts.master')

@section('content')

<div class="row">

	<div class="col-md-9">
	
		<!-- List all contacts -->

		<h2>All Contacts</h1>		

		<table class="table table-striped table-hover">
		
			<thead>
			
				<tr>
				
					<th>{{ sort_table_by('contacts', 'name', 'Name') }}</th>
			
					<th>Agency</th>
				
					<th>Role</th>
				
					<th>Email</th>

					<th>Main Phone</th>
					
					<th>Mobile Phone</th>
			
				</tr>
		
			</thead>
		
			@foreach($contacts as $contact)
			
				<tr>

					<td>{{ link_to_route('contacts.edit', $contact->name, $contact->id) }}</td>					

					<td>{{ $contact->client->name }}</td>
					
					<td>{{ $contact->role }}</td>

					<td>{{ $contact->email }}</td>

					<td>{{ $contact->main_phone }}</td>
					
					<td>{{ $contact->mobile_phone }}</td>
				
				</tr>
			
			@endforeach
		
		</table>
	
	</div>
	
	<div class="col-md-3">
		
		<!-- Create A New Contact -->
		
		<h2>Add New Contact</h2>
		
		{{ Form::open(['method' => 'POST', 'route' => 'contacts.store']) }}
		
			@include('contacts/partials/_form')	
		
		{{ Form::close() }}
	
	</div>

</div>

@stop