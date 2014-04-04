@extends('layouts.master')

@section('content')

<div class="row">

	<div class="col-md-6 col-md-offset-3">
	
		<h2>Edit {{ $contact->name }}</h2>
		
		{{ Request::segment('1') }}

		{{ Form::model($contact, ['method' => 'PATCH', 'route' => ['contacts.update', $contact->id], 'class' => 'form']) }}
		
			@include('contacts/partials/_form', ['submitText' => 'Update Contact', 'backLink' => TRUE])	
		
		{{ Form::close() }}

	</div>
	
</div>

@stop