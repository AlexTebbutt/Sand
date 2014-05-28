@extends('layouts.masters.users')

@section('content')

<div class="row">

	<div class="col-md-6 col-md-offset-3">
	
		<h2>Edit User {{ $user->username }}</h2>

		{{ Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id], 'class' => 'form']) }}
		
			<div class="form-group">
			
				{{ Form::label('username', 'User Name') }}
			
				{{ Form::text('username', NULL, ['class' => 'form-control']) }}
				
				{{ $errors->first('username') }}
			
			</div>
			
			<div class="form-group">
			
				{{ Form::label('email', 'Email') }}
			
				{{ Form::text('email', NULL, ['class' => 'form-control']) }}
			
				{{ $errors->first('email') }}
			
			</div>
			
			<div class="form-group">
			
				{{ Form::label('role_id', 'Group') }}
			
				{{ Form::select('role_id', $role, NULL, ['class' => 'form-control']) }}
			
			</div>
			
			<div class="checkbox">
		
				{{ Form::label('enabled', 'Enabled') }}

				{{ Form::hidden('enabled', '0') }}
			
				{{ Form::checkbox('enabled', (isset($user->enabled) ? 1 : 0), (isset($user->enabled) ? TRUE : '')) }}
			
			</div>
			
			<div class="row">
				
				<div class="col-md-6">
				
					{{ Form::submit('Update User', ['class' => 'btn btn-primary']) }}
					
					{{ link_to('users/delete/' . $user->id, 'Delete User', ['class' => 'btn btn-danger']) }}
				
				</div>
				
				<div class="col-md-6 text-right">
					
					{{ link_to(URL::previous(), 'Back', ['class' => 'btn btn-default']) }}
					
				</div>
				
			</div>	
		
		{{ Form::close() }}

	</div>
	
</div>

@stop