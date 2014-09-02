<?php

class CostingsController extends \BaseController {


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$costing = New Costing();
		$input = array_filter(Input::all(), 'strlen');

		$costing->fill($input);
		
		if(!$costing->save())
		{
		
			return Redirect::back()->withInput()->withErrors($project->getErrors());
				
		}
		
		Event::fire('costing.created', $costing);
		
		return Redirect::to('projects/' . $costing->project_id . '/edit');
		
	}
	
	public function update($id)
	{
		
		$costing = Costing::findOrFail($id);
		$input = array_filter(Input::all(), 'strlen');
		$costing->fill($input);
		$updatedFields = $costing->getDirty();	
		$costing->save();
		$costing->updatedFields = $updatedFields;
		Event::fire('costing.updated', $costing);
		
		return Redirect::to('projects/' . $costing->project_id . '/edit');		
		
	}	
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
		$costing = Costing::findOrFail($id);
		$projectID = $costing->project_id;
		Costing::destroy($id);
		Event::fire('costing.deleted', $costing);
				
		return Redirect::to('projects/' . $costing->project_id . '/edit');	
		
	}	

}
