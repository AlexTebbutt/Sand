<?php

class Projectphase extends Basemodel {

	protected $guarded = ['id'];
	
	protected static $rules =[
		'name' => 'required'
	];

	public function project()
	{
		
		return $this->hasMany('Project');
		
	}

}