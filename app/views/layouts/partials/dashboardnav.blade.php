<nav class="page-header secondary-nav">

	<ul class="nav nav-tabs">

		<li {{ set_active('dashboard/overview') }}>
			
			<a href="/dashboard/overview">Overview</a>
						
		</li>

		<li {{ set_active('dashboard/timeline') }}>
			
			<a href="/dashboard/timeline">Timeline</a>
			
		</li>	
		
		<li {{ set_active('dashboard/urgent') }}>

			<a href="/dashboard/urgent">Urgent</a>			
						
		</li>	

	</ul>

	@yield('updates')			
	
</nav>

