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

<div class="">

	{{ Form::label('role_id', 'role_id') }}

	{{ Form::select('role_id', $role, NULL, ['class' => 'form-control']) }}

</div>

<div class="form-group">

	{{ Form::label('enabled', 'Enabled') }}

	{{ Form::checkbox('enabled', (isset($user->enabled) ? 1 : 0), (isset($user->enabled) ? TRUE : '')) }}

</div>

<div class="row">
	
	<div class="col-md-6">
	
		{{ Form::submit(isset($submitText) ? $submitText : 'Create User', ['class' => 'btn btn-primary']) }}
		
		{{ link_to('users/delete/' . $user->id, 'Delete User', ['class' => 'btn btn-danger']) }}
	
	</div>
	
	<div class="col-md-6 text-right">
		
		{{ link_to(URL::previous(), 'Back', ['class' => 'btn btn-default']) }}
		
	</div>
	
</div>	