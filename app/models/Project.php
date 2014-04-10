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
	
	
	/* Date Mutators to set format correctly */

	
/*
	public function setGoliveDateAttribute($value)
  {
      $this->attributes['golive_date'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
  }


	public function setDueDateAttribute($value)
  {
      $this->attributes['due_date'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
  }
*/

	public function setCompletedDateAttribute($value)
  {
      $this->attributes['completed_date'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
  }

/*
	public function setStartDateAttribute($value)
  {
      $this->attributes['start_date'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
  }
*/


	/* Date Accessors to get format correctly */


/*
	public function getGoliveDateAttribute($value) 
  {
     return Carbon::createFromFormat('Y-m-d', $value)->format('d/m/Y');
  }

	public function getDueDateAttribute($value)
  {
     return Carbon::createFromFormat('Y-m-d', $value)->format('d/m/Y');
  }
*/
  
	public function getCompletedDateAttribute($value)
  {
     return Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d/m/Y');
  }
  
/*
	public function getStartDateAttribute($value)
  {
     return Carbon::createFromFormat('Y-m-d', $value)->format('d/m/Y');
  }    	
*/

}