@extends('layouts.masters.projects')

@section('content')

<div class="row">

	<div class="col-md-12">

		<h1>Projects On Hold</h1>

<!-- List current -->
		<table class="table table-hover">
		
			<thead>
			
				<tr>
				
					<th>{{ sort_table_by('projects/onhold', 'name', 'Project Name') }}</th>
									
					<th>{{ sort_table_by('projects/onhold' , 'clientName', 'Client') }}</th>
			
					<th>{{ sort_table_by('projects/onhold' , 'contactName', 'Contact') }}</th>

					<th>{{ sort_table_by('projects/onhold', 'start_date', 'Start Date') }}</th>
					
					<th>{{ sort_table_by('projects/onhold', 'resource', 'Resource(s)') }}</th>

					<th>{{ sort_table_by('projects/onhold', 'percentage_complete', '% Complete') }}</th>
					
					<th>{{ sort_table_by('projects/onhold', 'due_date', 'Due Date') }}</th>
					
					<th>{{ sort_table_by('projects/onhold', 'reference', 'Estimate') }}</th>
					
					<th>{{ sort_table_by('projects/onhold', 'value', 'Value (£)') }}</th>
			
				</tr>
		
			</thead>
		
			@foreach($projects as $project)
			
				<tr>

					<td>{{ link_to_route('projects.edit', $project->name, $project->id) }}</td>
					
					<td>{{ $project->clientName }}</td>
			
					<td>{{ $project->contactName }}</td>

					<td>{{ $project->start_date }}</td>
					
					<td>{{ $project->resource }}</td>

					<td>{{ show_percentage_as_bar($project->percentage_complete) }}</td>
					
					<td>{{ $project->due_date }}</td>
					
					<td>{{ create_external_link($project->link, $project->reference) }}</td>
					
					<td>{{ $project->value }}</td>
				
				</tr>
			
			@endforeach
		
		</table>
	
	</div>
	
</div>

@stop