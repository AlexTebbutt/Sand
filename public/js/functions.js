$(document).ready(function()
{

	//Update contact list based on client selected in create / edit project forms
	//Only run on change
	$('#client_id').change(function()
	{

		var html = '';
		$('#contact_id').html('');
		
		//Get the data based on the client ID
		$.ajax(
		{
			
			url: ('/contacts/client/' + ($('#client_id').val()) + '/list/'),
			dataType:'JSON',
			success: function(data)
			{

				$.each(data, function(key, value)
				{
					
					html += '<option value="' + key + '">' + value + '</option>';
					
				})

				$('#contact_id').append(html);					

			},
			error: function()
			{
				$('#contact_id').append('<option value="-1">N / A</option>');
			}
			
		});

	});
	
	//Submit a new note, retireve and populate the notes list
	$('#add-note').click(function(event)
	{
		var newNote = new Object();
		newNote.project_id = $('#project_id').val();
		newNote.user_id = $('#user_id').val();
		newNote.note = $('#note').val().replace(/\r?\n/g, '<br>');	

		event.preventDefault();		

		
		$.ajax(
		{
			type: 'POST',
			url: '/api/note/project/create',
			data: newNote,
			success: function(data)
			{
				
				if(data.validation_failed == 1)
				{

					$('label[for="note"]').after('<span> (' + data.errors + ')</span>');			
					
				}
				else
				{
				
					$('#note').val('');
					$('#project-notes').hide().prepend('<div class="col-md-12"><div class="panel panel-default"><div class="panel-heading"><p class="panel-title">On ' + data.added_on + ' ' + data.username + ' added:</p></div><div class="panel-body"><div class="form-group col-md-12">' + data.note + '</div></div></div></div>').fadeIn('slow');

					
				}

				
			}
			,
			
			error: function(){
				
				console.log('Error');
				
			}
		});
	
	});

	//Determine if the panel needs to be open or closed based on stored variable.
	$.each($('.toggle-click'), function()
	{
		
		if((($.totalStorage(this.id + '-detail')) && ($.totalStorage(this.id + '-detail') == false)) || (!$.totalStorage(this.id + '-detail')))
		{
			
			$.totalStorage(this.id + '-detail', false);
			$('.' + this.id + '-detail').hide();			
			
		} else {
			
			$('#toggle-' + this.id + '-icon').toggleClass('rotate');
			
		}
	
	});

  //Toggle functionality for admin panels		
	$('.toggle-click').click(function()
	{

		togglePanel(this.id);
		
	});    

	var isOpen = false;

	//Open all panels
	$('#open-all-panels').click(function()
	{
		event.preventDefault();
		$('#toggle-open-all-panels-icon').toggleClass('rotate')
		isOpen = !isOpen;
		console.log(isOpen);
		
		$.each($('.toggle-click'), function()
		{
			if(!isOpen && $('.' + this.id + '-detail').is(':visible'))
			{
			
				togglePanel(this.id);
			
			}
			
			else if(isOpen && !$('.' + this.id + '-detail').is(':visible'))
			
			{
			
				togglePanel(this.id);
			
			}			
			
		});
		
	})
	
	function togglePanel(panelName)
	{
		
		$('.' + panelName + '-detail').slideUp().eq($(this).index()).stop().slideToggle();
		$('#toggle-' + panelName + '-icon').toggleClass('rotate');	
		$.totalStorage(panelName + '-detail', !$.totalStorage(panelName + '-detail'));
		
	}
	
	// Dashboard functions
	
	// Update panel open / close
	$('#update-toggle').click(function()
	{
		event.preventDefault();
		console.log('Updates button clicked.');
		$('.update-detail').slideUp().eq($(this).index()).stop().slideToggle();		
		
	});

	

});