<?php

class ClientsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	
		$sortBy = (!is_null(Request::get('sortBy')) ? Request::get('sortBy') : 'name');
		$direction = (!is_null(Request::get('direction')) ? Request::get('direction') : 'ASC');
		$clients = Client::orderBy($sortBy, $direction)->get();
		
		return View::make('clients.index', compact('clients'));
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$client = new Client(Input::all());

		if (!$client->save())
		{
			
			return Redirect::back()->withInput()->withErrors($client->getErrors());
			
		}		
		
		Event::fire('client.created', $client);
		
		return Redirect::to('clients');
		
		}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$client = Client::findOrFail($id);
		
		return View::make('clients.edit', compact('client'));
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		$client = Client::findOrFail($id);
		
		$client->fill(Input::all());		
		
		$client->save();
		
		Event::fire('client.updated', $client);
		
		return Redirect::to('clients');
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}