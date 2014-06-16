@extends('layouts.masters.projects')

@section('content')

<div class="row">

	<div class="col-md-12">

		<h1>Completed Projects</h1>
		
		<p>{{ $details->summary }}</p>
		
<!-- List current -->
		<table class="table table-striped table-hover">
		
			<thead>
			
				<tr>

					<th>{{ sort_table_by('projects/completed', 'name', 'Project Name') }}</th>				
									
					<th>{{ sort_table_by('projects/completed' , 'clientName', 'Client') }}</th>
			
					<th>{{ sort_table_by('projects/completed' , 'contactName', 'Contact') }}</th>

					<th>{{ sort_table_by('projects/completed', 'completed_date', 'Date Completed') }}</th>					

					<th>{{ sort_table_by('projects/completed', 'reference', 'Invoice') }}</th>					

					<th>{{ sort_table_by('projects/completed', 'estimated_development_time', 'Estimated Dev Time (H)') }}</th>					

					<th>{{ sort_table_by('projects/completed', 'actual_development_time', 'Actual Dev Time (H)') }}</th>					

					<th>{{ sort_table_by('projects/completed', 'value', 'Value (£)') }}</th>					
			
				</tr>
		
			</thead>
		
			@foreach($projects as $project)
			
				<tr>

					<td>{{ link_to_route('projects.edit', $project->name, $project->id) }}</td>
					
					<td>{{ $project->clientName }}</td>
			
					<td>{{ $project->contactName }}</td>
					
					<td>{{ $project->completed_date }}</td>
					
					<td>{{ create_invoice_link($project->link, $project->reference, $project->paymentphase_id) }}</td>
					
					<td>{{ $project->estimated_development_time }}</td>
					
					<td>{{ $project->actual_development_time }}</td>
					
					<td>{{ $project->value }}</td>
									
				</tr>
			
			@endforeach
		
		</table>
	
	</div>
	
</div>

@stop