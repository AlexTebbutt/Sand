<div class="form-group">

	{{ Form::label('name', 'Name') }}

	{{ Form::text('name', NULL, ['class' => 'form-control']) }}
	
	{{ $errors->first('name') }}

</div>

<div class="form-group">

	{{ Form::label('client_id', 'Agency') }}

	{{ Form::select('client_id', $clients, null, ['class' => 'form-control']) }}

</div>


<div class="form-group">

	{{ Form::label('role', 'Role') }}

	{{ Form::text('role', NULL, ['class' => 'form-control']) }}

</div>

<div class="form-group">

	{{ Form::label('email', 'Email') }}

	{{ Form::text('email', NULL, ['class' => 'form-control']) }}
	
	{{ $errors->first('email') }}

</div>

<div class="form-group">

	{{ Form::label('main_phone', 'Telephone Number') }}

	{{ Form::text('main_phone', NULL, ['class' => 'form-control']) }}

</div>

<div class="form-group">

	{{ Form::label('mobile_phone', 'Mobile Number') }}

	{{ Form::text('mobile_phone', NULL, ['class' => 'form-control']) }}

</div>

<div class="row">
	
	<div class="col-md-6">
	
		{{ Form::submit(isset($submitText) ? $submitText : 'Create Contact', ['class' => 'btn btn-primary']) }}
	
	</div>
	
	<div class="col-md-6 text-right">
		
		{{ isset($backLink) ? link_to(URL::previous(), 'Back') : '' }}
		
	</div>
	
</div>