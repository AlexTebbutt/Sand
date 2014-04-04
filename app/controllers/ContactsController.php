<?php

class ContactsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$contacts = Contact::with('client')->get();
		$clients = Client::lists('name','id');
		
		return View::make('contacts.index', compact('contacts', 'clients'));
		
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

		$contact = new Contact(Input::all());

		if (!$contact->save())
		{
			
			return Redirect::back()->withInput()->withErrors($contact->getErrors());
			
		}		
		
		return Redirect::to('contacts');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$contact = Contact::findOrFail($id);
		$clients = Client::lists('name','id');
		
		return View::make('contacts.edit', compact('contact','clients'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$contact = Contact::findOrFail($id);

		$contact->fill(Input::all());
		
		$contact->save();
		
		return Redirect::to('contacts');

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