<nav>
 {{ Request::query('phase') }}
	<ul class="nav nav-tabs">
	
		<li {{ set_active('projects') }}>
			
			{{ link_to_route('projects', 'Projects', ['tab' => 'projects']) }}
						
		</li>

		<li {{ set_active('pipeline') }}>
			
			{{ link_to_route('projects', 'Pipeline', ['phase' => '1', 'tab' => 'pipeline']) }}
			
		</li>	

		<li {{ set_active('complete') }}>
			
			{{ link_to_route('projects', 'Completed Projects', ['phase' => '7', 'tab' => 'complete']) }}
						
		</li>	

		<li {{ set_active('clients') }}>
			
			{{ link_to_route('clients', 'Clients', ['tab' => 'clients']) }}
			
		</li>	
				
		<li {{ set_active('contacts') }}>
			
			{{ link_to_route('contacts', 'Contacts', ['tab' => 'contacts']) }}
			
		</li>	
		
	</ul>
	
</nav>