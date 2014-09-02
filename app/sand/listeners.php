<?php

	Event::listen('project.created', function(Project $project)
	{
		
		log_update(Auth::user()->username . ' created new project ' . $project->name);
		
	});


	Event::listen('project.updated', function(Project $project)
	{
		$logMessage = Auth::user()->username . ' changed ';

		foreach($project->updatedFields as $key => $value)
		{
			
			$logMessage .= $key . ' to ' . $value . ' - ';

		}
		
		$logMessage .= 'on ' . $project->name;

		log_update($logMessage);
		
	});


	Event::listen('project.deleted', function(Project $project)
	{
		
		log_update(Auth::user()->username . ' deleted project ' . $project->name);
		
	});


	Event::listen('client.created', function(Client $client)
	{
		
		log_update(Auth::user()->username . ' created new client ' . $client->name);
		
	});


	Event::listen('client.updated', function(Client $client)
	{
		
		log_update(Auth::user()->username . ' updated client ' . $client->name);
		
	});

	Event::listen('contact.created', function(Contact $contact)
	{
		
		log_update(Auth::user()->username . ' created new contact ' . $contact->name);
		
	});


	Event::listen('contact.updated', function(Contact $contact)
	{
		
		log_update(Auth::user()->username . ' updated contact ' . $contact->name);
		
	});
	
	Event::listen('projectnote.created', function(Projectnote $projectNote)
	{
		
		log_update(Auth::user()->username . ' added a note to ' . Project::find($projectNote->id)->name);
		
	});
		

	Event::listen('costing.created', function(Costing $costing)
	{
		
		log_update(Auth::user()->username . ' created a new ' . (strpos(Paymentphase::find($costing->paymentphase_id)->name, 'Estimate') ? 'Estimate' : 'Invoice') . ' - #' . $costing->reference . ', valued at £' . $costing->value . ' for project ' . Project::find($costing->project_id)->name);
		
	});


	Event::listen('costing.updated', function(Costing $costing)
	{
		
		$logMessage = Auth::user()->username . ' updated ' . (strpos(Paymentphase::find($costing->paymentphase_id)->name, 'Estimate') ? 'Estimate' : 'Invoice') . ' #' . $costing->reference;

		foreach($costing->updatedFields as $key => $value)
		{
			
			$logMessage .= ' - ' . $key . ' to ' . $value;

		}
		
		$logMessage .= ' on ' . Project::find($costing->project_id)->name;

		log_update($logMessage);
		
/*
		
		
		log_update(Auth::user()->username . ' updated ' . (strpos(Paymentphase::find($costing->paymentphase_id)->name, 'Estimate') ? 'Estimate' : 'Invoice') . ' - #' . $costing->reference . ', valued at £' . $costing->value . ' for project ' . Project::find($costing->project_id)->name);
*/
		
	});
	
	Event::listen('costing.deleted', function(Costing $costing)
	{
		
		log_update(Auth::user()->username . ' deleted ' . (strpos(Paymentphase::find($costing->paymentphase_id)->name, 'Estimate') ? 'Estimate' : 'Invoice') . ' #' . $costing->reference . ' on project ' . Project::find($costing->project_id)->name);
		
	});	

?>