{{ Form::open() }}

	<div class="row">

		<div class="col-md-12">

			<div class="panel panel-default">
	
				<div class="panel-heading">

					<div class="row">
						
						<div class="col-md-11">
							
							<h2 class="panel-title">Project Notes & Info</h2>
							
						</div>
						
						<div class="col-md-1 text-right">
						
							<span id="toggle-notes" class="glyphicon glyphicon-plus"></span>
							
						</div>
					
					</div>

				</div>
				
				<div class="panel-body notes-detail">
				
					<div class="form-group col-md-10">
					
						{{ Form::label('note', 'Note', ['id' => 'note-label']) }}
					
						{{ Form::textarea('note', NULL, ['class' => 'form-control', 'rows' => '4']) }}
											
					</div>					
					
					@if(!isset($HideProjectNotes))

					<div class="col-md-2 text-right add-note-button">
					
						{{ Form::hidden('project_id', $project->id, ['id' => 'project_id']) }}

						{{ Form::hidden('user_id', Auth::user()->id, ['id' => 'user_id']) }}
					
					 	{{ Form::button('Add Note', ['id' => 'add-note', 'class' => 'btn btn-primary top-pad-button']) }}
						
					</div>
					
					<div id="project-notes">
											
						@foreach($projectnotes as $projectnote)
						
							<div class="col-md-12">
				
								<div class="panel panel-default">
						
									<div class="panel-heading">
				
										<p class="panel-title">{{ show_note_info($projectnote->userName, $projectnote->created_at) }}</p>
				
									</div>							
					
									<div class="panel-body">
									
										<div class="form-group col-md-12">
		
											{{ $projectnote->note }}
											
										</div>
										
									</div>
									
								</div>
					
							</div>

						@endforeach	
						
					</div>
						
					@endif				

				</div>
				
			</div>
			
		</div>

	</div>		
	
{{ Form::close() }}