<nav class="page-header secondary-nav">

	<ul class="nav nav-tabs">

		<li {{ set_active('projects/current') }}>
			
			<a href="/projects/current">Current Projects</a>
						
		</li>

		<li {{ set_active('projects/pipeline') }}>
			
			<a href="/projects/pipeline">Pipeline</a>
			
		</li>	
		
		<li {{ set_active('projects/complete') }}>

			<a href="/projects/complete">Completed Projects</a>			
						
		</li>	

		<li {{ set_active('projects/onhold') }}>

			<a href="/projects/onhold">Projects On Hold</a>			
						
		</li>	

		<li {{ set_active('projects/rejected') }}>

			<a href="/projects/rejected">Rejected Projects</a>			
						
		</li>	

		<li {{ set_active('projects/create') }}>

			<a href="/projects/create">Create New Project</a>			
						
		</li>	

	</ul>
			
</nav>