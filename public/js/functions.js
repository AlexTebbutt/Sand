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
		newNote.note = $('#note').val();	
		
		var postdata = JSON.stringify(newNote);

		event.preventDefault();		

/*
		$.ajax(
		{
			
			type:'POST',
			url:'/note/project/create',
			data:postdata,
			success:function()
			{
				
				console.log(data);
				
			}
			
		});
*/

/*
		$.post('/note/project/create', newNote, function(data)
		{
			
			console.log(data);
			
		});
*/

/*
		$.get('/note/project/create', function(data)
		{
			
			console.log(data);
			
		});
*/
		
		$.ajax(
		{
			type: 'GET',
			url: '/note/project/create',
			data: postdata,
			success: function(data)
			{
				
				console.log(data);
				
			}
			,
			
			error: function(){
				
				console.log('Error');
				
			}
		});



		
	});
	

});