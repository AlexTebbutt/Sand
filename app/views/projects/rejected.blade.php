@extends('layouts.masters.projects')

@section('content')

<div class="row">

	<div class="col-md-12">

		<h1>Rejected Projects</h1>
		
		<!-- List current -->
		<table class="table table-striped table-hover">
		
			<thead>
			
				<tr>

					<th>{{ sort_table_by('projects/rejected', 'name', 'Project Name') }}</th>				
									
					<th>{{ sort_table_by('projects/rejected' , 'clientName', 'Client') }}</th>
			
					<th>{{ sort_table_by('projects/rejected' , 'contactName', 'Contact') }}</th>

					<th>{{ sort_table_by('projects/rejected', 'estimate_number', 'Estimate') }}</th>					

					<th>{{ sort_table_by('projects/rejected', 'value', 'Value (£)') }}</th>				
					
					<th>{{ sort_table_by('projects/rejected', 'b.note', 'Note') }}</th>				

				</tr>
		
			</thead>
		
			@foreach($projects as $project)
			
				<tr>

					<td>{{ link_to_route('projects.edit', $project->name, $project->id) }}</td>
					
					<td>{{ $project->clientName }}</td>
			
					<td>{{ $project->contactName }}</td>
					
					<td>{{ create_external_link($project->estimate_link, $project->estimate_number) }}</td>
					
					<td>{{ $project->value }}</td>
					
					<td>{{ Str::words($project->note, $words = 15, $end = '...') }}</td>
									
				</tr>
			
			@endforeach
		
		</table>
	
	</div>
	
</div>

@stop