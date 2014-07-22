<div class="row">

	<div class="col-md-12">
		
		<div class="row">
			
			<div class="col-md-12">
	
				<div class="panel panel-default">
		
					<div id="costing" class="panel-heading toggle-click">
						
						<div class="row">
							
							<div class="col-md-11">
								
								<h2 class="panel-title">Estimates & Invoices</h2>
								
							</div>
							
							<div class="col-md-1 text-right">
							
								<span id="toggle-costing-icon" class="glyphicon glyphicon-plus toggle-icon"></span>
								
							</div>
						
						</div>
						
					</div>
					
					<div class="panel-body costing-detail">													

						<div class="row">
						
							<div class="col-md-12">
							
								<div class="form-group col-md-2">
							
									<p><strong>Costing Phase</strong></p>
									
								</div>
								
								<div class="form-group col-md-1">
								
									<p><strong>#</strong></p>								
								
								</div>
								
								<div class="form-group col-md-2">
								
									<p><strong>Link</strong></p>
								
								
								</div>		
								
								<div class="form-group col-md-2">
								
									<p><strong>Value</strong></p>
																
								</div>	

								<div class="form-group col-md-2">
								
									<p><strong>Note</strong></p>
																
								</div>										
								
							</div>
							
						</div>

<!-- 				form for adding a new costing -->
						{{ Form::open(['url' => '/costings', 'method' => 'POST' ]) }}

							<div class="row">
							
								<div class="col-md-12">
								
									{{ Form::hidden('project_id', $project->id) }}
										
									<div class="form-group col-md-2">
										
										{{ Form::select('paymentphase_id', $paymentphases, null, ['class' => 'form-control']) }}
			
									</div>
									
									<div class="form-group col-md-1">
									
										{{ Form::text('reference', NULL, ['class' => 'form-control']) }}
									
									</div>
									
									<div class="form-group col-md-2">
									
										{{ Form::text('link', NULL, ['class' => 'form-control']) }}
									
									</div>		

									<div class="form-group col-md-2">
									
										{{ Form::text('value', NULL, ['class' => 'form-control']) }}
									
									</div>
									
									
									<div class="form-group col-md-2">
									
										{{ Form::text('note', NULL, ['class' => 'form-control']) }}
									
									</div>
									
									<div class="col-md-3 text-right">	
									
										{{ Form::submit('Add', ['id' => 'add-costing', 'class' => 'btn btn-primary']) }}
										
									</div>
									
								</div>
								
							</div>
	
						{{ Form::close() }}

<!-- 				Retrieve existing costings						 -->

						@foreach($costings as $costing)
	
							{{ Form::open(['method' => 'PATCH', 'route' => ['costings.update', $costing->id]]) }}
	
								<div class="row">
								
									<div class="col-md-12">
											
										<div class="form-group col-md-2">
											
											{{ Form::select('paymentphase_id', $paymentphases, $costing->paymentphase_id, ['class' => 'form-control']) }}
				
										</div>
										
										<div class="form-group col-md-1"> 
										
											{{ Form::text('reference', $costing->reference, ['class' => 'form-control']) }}
										
										</div>
										
										<div class="form-group col-md-2">
										
											{{ Form::text('link', $costing->link, ['class' => 'form-control']) }}
										
										</div>		

										<div class="form-group col-md-2">
										
											{{ Form::text('value', $costing->value, ['class' => 'form-control']) }}
										
										</div>									

										<div class="form-group col-md-2">
										
											{{ Form::text('note', $costing->note, ['class' => 'form-control']) }}
										
										</div>	

										<div class="col-md-3 text-right">	
							
											{{ Form::submit('Update', ['class' => 'btn btn-success']) }}

											{{ link_to_route('costings.delete', 'Delete', ['id' => $costing->id], ['class' => 'btn btn-danger']) }}													

											{{ link_to($costing->link, 'View', ['class' => 'btn btn-info', 'target' => '_blank']) }}	
											
										</div>
										
										
									</div>
									
								</div>
		
							{{ Form::close() }}
							
						@endforeach

					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>

