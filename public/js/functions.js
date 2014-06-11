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
				console.log(data);
				
				$.each(data, function(key, value)
				{
					
					html += '<option value="' + key + '">' + value + '</option>';
					console.log(html);
					
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

		console.log(newNote);
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
					console.log(data);
					
				}

				
			}
			,
			
			error: function(){
				
				console.log('Error');
				
			}
		});



		
	});
	

});