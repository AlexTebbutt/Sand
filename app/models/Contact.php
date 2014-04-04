<?php

class Contact extends Basemodel {

	protected $guarded = ['id', 'created_at', 'updated_at'];
	
	protected static $rules =[
		'client_id' => 'required',
		'name' => 'required',
		'email' => 'required|email'
	];

	public function client()
	{
		
		return $this->belongsTo('Client');
		
	}

}