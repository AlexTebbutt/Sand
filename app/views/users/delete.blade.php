@extends('layouts.masters.users')

@section('content')

<div class="row">

	<div class="col-md-12">
	
		<h1>Delete {{ $user->username }}</h1>

		{{ Form::open(['method' => 'DELETE', 'url' => 'users/' . $user->id, 'class' => 'form']) }}

			<p>Are you sure you want to delete {{ $user->name }}?</p>
			
			{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
			
			{{ link_to(URL::previous(), 'Cancel', ['class' => 'btn btn-default']) }}
		
		{{ Form::close() }}

	</div>
	
</div>

@stop