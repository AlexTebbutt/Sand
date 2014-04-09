@extends('layouts.master')

@section('content')

<div class="row">

	<div class="col-md-12">

		<h1>Completed Projects</h1>

<!-- List current -->
		<table class="table table-striped table-hover">
		
			<thead>
			
				<tr>
				
					<th>Project Name</th>
									
					<th>Client</th>
			
					<th>Contact</th>
					
					<th>Date Completed</th>
					
					<th>Estimate</th>
					
					<th>Estimated Dev Time (H)</th>
					
					<th>Actual Dev Time (H)</th>
					
					<th>Value (£)</th>
			
				</tr>
		
			</thead>
		
			@foreach($projects as $project)
			
				<tr>

					<td>{{ link_to_route('projects.edit', $project->name, $project->id) }}</td>
					
					<td>{{ $project->client->name }}</td>
			
					<td>{{ $project->contact->name }}</td>
					
					<td>{{ $project->completed_date }}</td>
					
					<td>{{ create_external_link($project->estimate_link, $project->estimate_number) }}</td>
					
					<td>{{ $project->estimated_development_time }}</td>
					
					<td>{{ $project->actual_development_time }}</td>
					
					<td>{{ $project->value }}</td>
									
				</tr>
			
			@endforeach
		
		</table>
	
	</div>
	
</div>

@stop