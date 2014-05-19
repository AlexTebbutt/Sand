@extends('layouts.master')

@section('content')

<div class="row">

	<div class="col-md-9">
	
		<!-- List all users -->

		<h2>All Users</h1>		

		<table class="table table-striped table-hover">
		
			<thead>
			
				<tr>

					<th>{{ sort_table_by('users', 'username', 'User Name') }}</th>		
				
					<th>Email</th>
				
					<th>Role</th>
				
					<th>Last Login</th>
				
					<th>Enabled</th>
			
				</tr>
		
			</thead>
		
			@foreach($users as $user)
			
				<tr>
				
					<td>{{ link_to_route('users', $user->name, $user->id) }}</td>
					
					<td>{{ $user->email }}</td>
					
					<td>{{ $user->role }}</td>
					
					<td>{{ $user->last_login }}</td>
					
					<td>{{ $user->enabled }}</td>
				
				</tr>
			
			@endforeach
		
		</table>
	
	</div>
	
	<div class="col-md-3">
		
		<!-- Create A New client -->
		
		<h2>Add New User</h2>
		

	</div>

</div>

@stop