<nav class="navbar navbar-default" role="navigation">

  <div class="navbar-header">

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">

      <span class="sr-only">Toggle navigation</span>

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>

    </button>

    <a class="navbar-brand" href="/">SAND: Beta</a>

  </div>

	<div class="collapse navbar-collapse" id="navbar-collapse=1">
	
		<ul class="nav navbar-nav">
		
			<li class="dropdown">
			
				<a class="dropdown-toggle" data-toggle="dropdown" href="/projects/complete">Projects <b class="caret"></b></a>
				
				<ul class="dropdown-menu">
			
					<li>
						
						<a href="/projects">Current Projects</a>
									
					</li>
			
					<li>
						
						<a href="/projects/pipeline">Pipeline</a>
						
					</li>	

					<li>
			
						<a href="/projects/complete">Completed Projects</a>			
									
					</li>

					<li class="divider"></li>
					
					<li>
			
						<a href="/projects/create">Create New Project</a>			
									
					</li>	
	
				</ul>
			
			</li>
	
			<li {{ set_active('clients') }}>
				
				<a href="/clients">Clients</a>
				
			</li>	
					
			<li {{ set_active('contacts') }}>
	
				<a href="/contacts">Contacts</a>			
				
			</li>	
			
		</ul>

	</div>
	
</nav>