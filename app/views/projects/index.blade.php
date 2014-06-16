@extends('layouts.masters.projects')

@section('content')

<div class="row">

	<div class="col-md-12">

		<h1>Current Projects</h1>
		
		<p>{{ $details->summary }}</p>

<!-- List current -->
		<table class="table table-striped table-hover">
		
			<thead>
			
				<tr>
				
					<th>{{ sort_table_by('projects', 'name', 'Project Name') }}</th>
									
					<th>{{ sort_table_by('projects' , 'clientName', 'Client') }}</th>
			
					<th>{{ sort_table_by('projects' , 'contactName', 'Contact') }}</th>
					
					<th>{{ sort_table_by('projects', 'resource', 'Resource(s)') }}</th>

					<th>{{ sort_table_by('projects', 'projectPhaseName', 'Current Phase') }}</th>

					<th>{{ sort_table_by('projects', 'percentage_complete', '% Complete') }}</th>
					
					<th>{{ sort_table_by('projects', 'due_date', 'Due Date') }}</th>
					
					<th>{{ sort_table_by('projects', 'reference', 'Estimate') }}</th>
					
					<th>{{ sort_table_by('projects', 'value', 'Value (£)') }}</th>
			
				</tr>
		
			</thead>
		
			@foreach($projects as $project)
			
				<tr>

					<td>{{ link_to_route('projects.edit', $project->name, $project->id) }}</td>
					
					<td>{{ $project->clientName }}</td>
			
					<td>{{ $project->contactName }}</td>
					
					<td>{{ $project->resource }}</td>

					<td>{{ $project->projectPhaseName }}</td>

					<td>{{ show_percentage_as_bar('#00ff00',$project->percentage_complete) }}</td>
					
					<td>{{ $project->due_date }}</td>
					
					<td>{{ create_external_link($project->link, $project->reference) }}</td>
					
					<td>{{ $project->value }}</td>
				
				</tr>
			
			@endforeach
		
		</table>
	
	</div>
	
</div>

@stop