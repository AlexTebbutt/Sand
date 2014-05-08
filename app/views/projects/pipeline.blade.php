@extends('layouts.masters.projects')

@section('content')

<div class="row">

	<div class="col-md-12">

		<h1>Pipeline</h1>
		
		<p>{{ $details->summary }}</p>
		
		<!-- List current -->
		<table class="table table-striped table-hover">
		
			<thead>
			
				<tr>

					<th>{{ sort_table_by('projects/pipeline', 'name', 'Project Name') }}</th>				
									
					<th>{{ sort_table_by('projects/pipeline' , 'clientName', 'Client') }}</th>
			
					<th>{{ sort_table_by('projects/pipeline' , 'contactName', 'Contact') }}</th>

					<th>{{ sort_table_by('projects/pipeline', 'start_date', 'Start date') }}</th>					

					<th>{{ sort_table_by('projects/pipeline', 'resource', 'Resource(s)') }}</th>					

					<th>{{ sort_table_by('projects/pipeline', 'golive_date', 'Go Live Date') }}</th>					

					<th>{{ sort_table_by('projects/pipeline', 'estimate_number', 'Estimate') }}</th>					

					<th>{{ sort_table_by('projects/pipeline', 'value', 'Value (£)') }}</th>				

					<th>{{ sort_table_by('projects/pipeline', 'estimated_development_time', 'Estimated Dev Time (H)') }}</th>				
					
					<th>{{ sort_table_by('projects/pipeline', 'likelihood', 'Likelihood') }}</th>				

				</tr>
		
			</thead>
		
			@foreach($projects as $project)
			
				<tr>

					<td>{{ link_to_route('projects.edit', $project->name, $project->id) }}</td>
					
					<td>{{ $project->clientName }}</td>
			
					<td>{{ $project->contactName }}</td>

					<td>{{ $project->start_date }}</td>
					
					<td>{{ $project->resource }}</td>
					
					<td>{{ $project->golive_date }}</td>
					
					<td>{{ create_external_link($project->estimate_link, $project->estimate_number) }}</td>
					
					<td>{{ $project->value }}</td>
					
					<td>{{ $project->estimated_development_time }}</td>

					<td>{{ show_percentage_as_bar('#ff7bda', $project->likelihood) }}</td>
									
				</tr>
			
			@endforeach
		
		</table>
	
	</div>
	
</div>

@stop