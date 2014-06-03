@extends('layouts.masters.projects')

@section('scripts')		
{{ HTML::script('//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js') }}
@stop

@section('content')

<div class="row">

	<div class="col-md-12">
	
		<h1>Testing Dynamic Drop Downs</h1>

		{{ Form::open() }}

			<div class="form-group col-md-2">

				{{ Form::label('client_id', 'Client Name') }}

				{{ Form::select('client_id', $clients, null, ['class' => 'form-control']) }}
				
			</div>
		
		{{ Form::close() }}

	</div>
	
</div>
@stop