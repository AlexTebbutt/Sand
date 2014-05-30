<?php

class Projectnote extends Basemodel {

	protected $guarded = ['id'];
	
	public function project()
	{
		
		return $this->hasMany('Project');
		
	}

}