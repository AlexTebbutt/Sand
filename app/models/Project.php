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
	
	public static function whereCurrent()
	{
		
		return self::where('phase_id', '>', '1')->where('phase_id', '<', '8');
		
	}

	public static function wherePipeline()
	{
		
		return self::where('phase_id', '1');
		
	}
	
	public static function whereComplete()
	{
		
		return self::where('phase_id', '8');
		
	}	
	
	/* Date Mutators to set format correctly for storage */

	
	public function setGoliveDateAttribute($value)
  {
      $this->attributes['golive_date'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
  }

	public function setDueDateAttribute($value)
  {
      $this->attributes['due_date'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
  }

	public function setCompletedDateAttribute($value)
  {
      $this->attributes['completed_date'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
  }

	public function setStartDateAttribute($value)
  {
      $this->attributes['start_date'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
  }
  
/*
  public function setValueAttribute($value)
  {
		  $this->attributes['value'] = floatval($value);
	}
*/


	/* Date Accessors to get format correctly for display */


	public function getGoliveDateAttribute($value) 
  {

     if ($value !== NULL)
     {
     	return Carbon::createFromFormat('Y-m-d', $value)->format('d/m/Y');
     }
  }

	public function getDueDateAttribute($value)
  {

		if ($value !== NULL)
    {
     return Carbon::createFromFormat('Y-m-d', $value)->format('d/m/Y');
    }
    
  }
  
	public function getCompletedDateAttribute($value)
  {

     if ($value !== NULL)
     {
	     return Carbon::createFromFormat('Y-m-d', $value)->format('d/m/Y');
	   }
	     
  }
  
	public function getStartDateAttribute($value)
  {

		if ($value !== NULL)
		{
			return Carbon::createFromFormat('Y-m-d', $value)->format('d/m/Y');
		}

  }    
  
/*
  public function getValueAttribute($value)
  {
	  
	  if ($value !== NULL)
	  {
		  return number_format($value, 2);
	  }
	  
  }
*/
  	

}