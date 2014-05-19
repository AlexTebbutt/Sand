<div class="form-group">

	{{ Form::label('name', 'Name') }}

	{{ Form::text('name', NULL, ['class' => 'form-control']) }}
	
	{{ $errors->first('name') }}

</div>

<div class="form-group">

	{{ Form::label('address', 'Address') }}

	{{ Form::textarea('address', NULL, ['class' => 'form-control']) }}

</div>

<div class="form-group">

	{{ Form::label('post_code', 'Postcode') }}

	{{ Form::text('post_code', NULL, ['class' => 'form-control']) }}

</div>

<div class="form-group">

	{{ Form::label('main_phone', 'Telephone Number') }}

	{{ Form::text('main_phone', NULL, ['class' => 'form-control']) }}

</div>

<div class="form-group">

	{{ Form::label('importance', 'Importance') }}

	{{ Form::text('importance', NULL, ['class' => 'form-control']) }}

</div>

<div class="row">
	
	<div class="col-md-6">
	
		{{ Form::submit(isset($submitText) ? $submitText : 'Create Client', ['class' => 'btn btn-primary']) }}
	
	</div>
	
	<div class="col-md-6 text-right">
		
		{{ isset($backLink) ? link_to(URL::previous(), 'Back') : '' }}
		
	</div>
	
</div>