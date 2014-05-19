@extends('layouts.master')

@section('content')

<div class="row">

	<div class="col-md-6 col-md-offset-3">
	
		<h2>Edit {{ $client->name }}</h2>
		
		{{ Request::segment('1') }}

		{{ Form::model($client, ['method' => 'PATCH', 'route' => ['clients.update', $client->id], 'class' => 'form']) }}
		
			@include('clients/partials/_form', ['submitText' => 'Update Client', 'backLink' => TRUE])	
		
		{{ Form::close() }}

	</div>
	
</div>

@stop