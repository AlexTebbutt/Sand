<?php

class UpdatesController extends \BaseController {
	


	function store()
	{
		
		$update = New Update();
		
		$update->user_id = Auth::user()->id;
		$update->message = $data->message;;

		$update->save();
		
	}	


}
	
?>