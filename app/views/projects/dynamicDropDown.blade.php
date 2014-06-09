@extends('layouts.masters.projects')

@section('scripts')		
{{ HTML::script('//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js') }}
{{ HTML::script('js/app.js') }}
@stop

@section('content')

<div class="row" ng-app="projectsApp">

	<div class="col-md-12">
	
		<h1>Testing Dynamic Drop Downs</h1>

		<div ng-controller="dropDownController">
		
		{{ Form::open() }}

			<div class="form-group col-md-2">

				{{ Form::label('client_id', 'Client Name') }}

				{{ Form::select('client_id', $clients, null, ['class' => 'form-control', 'ng-model' => 'clients', 'ng-change' => 'change(clients)']) }}
				
			</div>

			<div class="form-group col-md-2">

				{{ Form::label('contact_id', 'Contact Name') }}

				<select ng-model="clientContacts" ng-options="contact as contact.name for contact in contacts"></select>
				
			</div>
			
			<% output %>
		
		{{ Form::close() }}
		
		</div>

	</div>
	
</div>
@stop