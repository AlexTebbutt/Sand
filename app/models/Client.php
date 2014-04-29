<?php

class Client extends BaseModel {

	protected $guarded = ['id'];
	
	protected static $rules =[
		'name' => 'required'
	];


	public function contacts()
	{
		
		return $this->hasMany('Contact');
		
	}

}