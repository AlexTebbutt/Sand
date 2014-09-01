<?php

	Event::listen('project.created', function(Project $project)
	{
		
		log_update(Auth::user()->username . ' created new project ' . $project->name);
		
	});


	Event::listen('project.updated', function(Project $project)
	{
		
		log_update(Auth::user()->username . ' updated project ' . $project->name);
		
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
		
?>