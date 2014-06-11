<div class="row">

	<div class="col-md-12">
		
		<div class="row">
			
			<div class="col-md-12">
	
				<div class="panel panel-default">
		
					<div class="panel-heading">
						
						<h2 class="panel-title">Estimates & Invoices</h2>
						
					</div>
					
					<div class="panel-body">													

						<div class="row">
						
							<div class="col-md-12">
							
								<div class="form-group col-md-3">
							
									<p><strong>Costing Phase</strong></p>
									
								</div>
								
								<div class="form-group col-md-2">
								
									<p><strong>Costing #</strong></p>								
								
								</div>
								
								<div class="form-group col-md-3">
								
									<p><strong>Link</strong></p>
								
								
								</div>		
								
								<div class="form-group col-md-3">
								
									<p><strong>Note</strong></p>
																
								</div>		
								
							</div>
							
						</div>

<!-- 						form for adding a new costing -->
						{{ Form::open() }}

							<div class="row">
							
								<div class="col-md-12">
										
									<div class="form-group col-md-3">
										
										{{ Form::select('paymentphase_id', $paymentphases, null, ['class' => 'form-control']) }}
			
									</div>
									
									<div class="form-group col-md-2">
									
										{{ Form::text('number', NULL, ['class' => 'form-control']) }}
									
									</div>
									
									<div class="form-group col-md-3">
									
										{{ Form::text('link', NULL, ['class' => 'form-control']) }}
									
									</div>		
									
									<div class="form-group col-md-3">
									
										{{ Form::text('note', NULL, ['class' => 'form-control']) }}
									
									</div>	
									
									{{ Form::submit(isset($submitText) ? $submitText : 'Add Costing', ['class' => 'btn btn-primary']) }}
									
								</div>
								
							</div>
	
						{{ Form::close() }}

<!-- 						Retrieve existing costings						 -->

						@if($showAllCostings)

							@foreach($costings as $costing)
		
								{{ Form::open() }}
		
									<div class="row">
									
										<div class="col-md-12">
												
											<div class="form-group col-md-3">
												
												{{ Form::select('paymentphase_id', $paymentphases, null, ['class' => 'form-control']) }}
					
											</div>
											
											<div class="form-group col-md-2">
											
												{{ Form::text('number', NULL, ['class' => 'form-control']) }}
											
											</div>
											
											<div class="form-group col-md-3">
											
												{{ Form::text('link', NULL, ['class' => 'form-control']) }}
											
											</div>		
											
											<div class="form-group col-md-3">
											
												{{ Form::text('note', NULL, ['class' => 'form-control']) }}
											
											</div>	
											
											{{ Form::submit(isset($submitText) ? $submitText : 'Update Costing', ['class' => 'btn btn-primary']) }}
											
										</div>
										
									</div>
			
								{{ Form::close() }}
								
							@endforeach
						
						@endif


					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>

