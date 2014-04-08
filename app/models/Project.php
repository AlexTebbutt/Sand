<?php

class Project extends Basemodel {

	protected $guarded = ['id', 'created_at', 'updated_at'];
	
	protected static $rules =[
		'client_id' => 'required',
		'contact_id' => 'required',
		'name' => 'required',
	];

	public function client()
	{
		
		return $this->belongsTo('Client');
		
	}
	
	public function contact()
	{
		
		return $this->belongsTo('Contact');	
		
	}
	
	public function phase()
	{
		
		return $this->belongsTo('Phase');
		
	}
	
	
/*
	// Mutator hacks to set date fields to NULL to allow them to store with no content.
	public function setGoliveDateAttribute($value) 
	{
  
    $this->attributes['golive_date'] = empty($value) ? null : $value;
	
	}

	public function setStartDateAttribute($value) 
	{
  
    $this->attributes['start_date'] = empty($value) ? null : $value;
	
	}

	public function setDueDateAttribute($value) 
	{
  
    $this->attributes['due_date'] = empty($value) ? null : $value;
	
	}

	public function setValueAttribute($value) 
	{
  
    $this->attributes['value'] = empty($value) ? null : $value;
	
	}
*/

}