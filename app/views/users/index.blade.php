@extends('layouts.masters.users')

@section('content')

<div class="row">

	<div class="col-md-8 col-md-offset-2">
	
		<!-- List all users -->

		<h2>All Users</h1>		

		<table class="table table-striped table-hover">
		
			<thead>
			
				<tr>

					<th>{{ sort_table_by('users', 'username', 'User Name') }}</th>		
				
					<th>{{ sort_table_by('users', 'email', 'Email') }}</th>
				
					<th>{{ sort_table_by('users', 'role_id', 'Role') }}</th>
				
					<th>{{ sort_table_by('users', 'last_login', 'Last Activity') }}</th>
				
					<th>{{ sort_table_by('users', 'enabled', 'Enabled') }}</th>
			
				</tr>
		
			</thead>
		
			@foreach($users as $user)
			
				<tr>
				
					<td>{{ link_to_route('users.edit', $user->username, $user->id) }}</td>
					
					<td>{{ $user->email }}</td>
					
					<td>{{ $user->role->name }}</td>
					
					<td>{{ $user->last_login }}</td>
					
					<td>{{ is_user_enabled($user->enabled) }}</td>
				
				</tr>
			
			@endforeach
		
		</table>
	
	</div>

</div>

@stop