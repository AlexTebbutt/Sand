<div class="row">

	<div class="col-md-12">
		
		<div class="row">
			
			<div class="col-md-12">

				<div class="panel panel-default">
		
					<div class="panel-heading">
						
						<h2 class="panel-title">Client Information</h2>
						
					</div>
					
					<div class="panel-body">
	
						<div class="form-group col-md-4">
							
							{{ Form::label('name', 'Project Name') }}
						
							{{ Form::text('name', NULL, ['class' => 'form-control']) }}
						
							{{ $errors->first('name') }}
							
						</div>

						<div ng-controller="contactDropDownController">
						
							<div class="form-group col-md-2">
				
								{{ Form::label('client_id', 'Client Name') }}
				
								{{ Form::select('client_id', $clients, null, ['class' => 'form-control']) }}
								
							</div>
				
							<div class="form-group col-md-2">					
				
								{{ Form::label('contact_id', 'Contact Name') }}
								
								{{ Form::select('contact_id', $contacts, null, ['class' => 'form-control']) }}
								
					
							</div>
						
						</div>
			
						<div class="form-group col-md-2">
						
							{{ Form::label('golive_date', 'Go Live Date') }}
							
							{{ Form::text('golive_date', NULL, ['class' => 'form-control', 'placeholder' => 'dd/mm/yyyy', 'data-provide' => 'datepicker', 'data-date-format' => 'dd/mm/yyyy']) }}
							
							{{ $errors->first('golive_date') }}
												
						</div>
						
						<div class="form-group col-md-2">
						
							{{ Form::label('likelihood', 'Likelihood') }}
						
							{{ Form::text('likelihood', NULL, ['class' => 'form-control']) }}
			
							{{ $errors->first('likelihood') }}
												
						</div>			
	
					</div>
					
				</div>
			
			</div>

		</div>
		
		<div class="row">

			<div class="col-md-12">

				<div class="panel panel-default">
		
					<div class="panel-heading">

						<h2 class="panel-title">Project Information</h2>
						
					</div>
					
					<div class="panel-body">
			
						<div class="form-group col-md-4">
						
							{{ Form::label('resource', 'Resource(s)') }}
						
							{{ Form::text('resource', NULL, ['class' => 'form-control']) }}
						
						</div>		
						
						<div class="form-group col-md-2">
						
							{{ Form::label('projectphase_id', 'Current Phase') }}
						
							{{ Form::select('projectphase_id', $projectphases, null, ['class' => 'form-control']) }}
						
						</div>		
			
						<div class="form-group col-md-2">
						
							{{ Form::label('start_date', 'Start Date') }}
						
							{{ Form::text('start_date', NULL, ['class' => 'form-control', 'placeholder' => 'dd/mm/yyyy','data-provide' => 'datepicker', 'data-date-format' => 'dd/mm/yyyy']) }}
						
						</div>
						
						<div class="form-group col-md-2">
						
							{{ Form::label('due_date', 'Due Date') }}
						
							{{ Form::text('due_date', NULL, ['class' => 'form-control', 'placeholder' => 'dd/mm/yyyy','data-provide' => 'datepicker', 'data-date-format' => 'dd/mm/yyyy']) }}
						
						</div>
						
						<div class="form-group col-md-2">
						
							{{ Form::label('percentage_complete', '% Complete') }}
						
							{{ Form::text('percentage_complete', NULL, ['class' => 'form-control']) }}
						
						</div>				

					</div>

				</div>
				
			</div>

		</div>
			
		
		<div class="row">

			<div class="col-md-4">

				<div class="panel panel-default">
		
					<div class="panel-heading">

						<h2 class="panel-title">Effort & Value</h2>

					</div>
					
					<div class="panel-body">
					
						<div class="form-group col-md-6">
								
							{{ Form::label('estimated_development_time', 'Est. Dev Time (H)') }}
						
							{{ Form::text('estimated_development_time', NULL, ['class' => 'form-control']) }}
						
						</div>

						<div class="form-group col-md-6">
						
							{{ Form::label('value', 'Value (£)') }}
						
							{{ Form::text('value', NULL, ['class' => 'form-control']) }}
						
						</div>	

					</div>
					
				</div>
				
			</div>

			<div class="col-md-4">

				<div class="panel panel-default">
		
					<div class="panel-heading">

						<h2 class="panel-title">Completion</h2>

					</div>
					
					<div class="panel-body">

			
						<div class="form-group col-md-6">
						
							{{ Form::label('actual_development_time', 'Act. Dev. Time (H)') }}
						
							{{ Form::text('actual_development_time', NULL, ['class' => 'form-control']) }}
						
						</div>
											
						<div class="form-group col-md-6">
						
							{{ Form::label('completed_date', 'Date Completed') }}
						
							{{ Form::text('completed_date', NULL, ['class' => 'form-control', 'placeholder' => 'dd/mm/yyyy','data-provide' => 'datepicker', 'data-date-format' => 'dd/mm/yyyy']) }}
			
							{{ $errors->first('completed_date') }}
												
						</div>

					</div>
					
				</div>
				
			</div>

			<div class="col-md-4 text-right">
			
				<p>{{ Form::submit(isset($submitText) ? $submitText : 'Create Project', ['class' => 'btn btn-primary control-button']) }}</p>
		
				@if(isset($duplicateButton))
					
					<p>{{ link_to('projects/duplicate/' . $project->id, 'Duplicate Project', ['class' => 'btn btn-success control-button']) }}</p>
					
				@endif
				
				@if(isset($deleteButton))
					
					<p>{{ link_to('projects/delete/' . $project->id, 'Delete Project', ['class' => 'btn btn-danger control-button']) }}</p>
					
				@endif
			
			</div>

		</div>		

	</div>

</div>