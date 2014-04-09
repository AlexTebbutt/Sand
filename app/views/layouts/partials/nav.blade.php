<nav>
 {{ Request::query('phase') }}
	<ul class="nav nav-tabs">
	
		<li {{ set_active('projects/create') }}>

			<a href="/projects/create">Create New Project</a>			
						
		</li>	

		<li {{ set_active('projects/complete') }}>

			<a href="/projects/complete">Completed Projects</a>			
						
		</li>	

		<li {{ set_active('projects') }}>
			
			<a href="/projects">Current Projects</a>
						
		</li>

		<li {{ set_active('projects/pipeline') }}>
			
			<a href="/projects/pipeline">Pipeline</a>
			
		</li>	

		<li {{ set_active('clients') }}>
			
			<a href="/clients">Clients</a>
			
		</li>	
				
		<li {{ set_active('contacts') }}>

			<a href="/contacts">Contacts</a>			
			
		</li>	
		
	</ul>
	
</nav>