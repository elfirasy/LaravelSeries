<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
			// Mengambil semua data user
			$data['daftar_user'] = User::all();

			// Mengirim data ke view
			return View::make('user/list', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
			return View::make('user/add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$usr = new User();
		$usr->email = Input::get('email');
		$usr->name = Input::get('name');
		$usr->phone = Input::get('phone');
		$usr->address = Input::get('address');
		$usr->password = md5(Input::get('password'));
		$usr->save();

		return Redirect::to('users');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data['data_user'] = User::find($id);
		return View::make('user/detail', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data['data_user'] = User::find($id);
		return View::make('user/edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usr = User::find($id);
		$usr->email = Input::get('email');
		$usr->name = Input::get('name');
		$usr->phone = Input::get('phone');
		$usr->address = Input::get('address');
		$usr->save();

		return Redirect::to('users');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$usr = User::find($id);
		$usr->delete();

		return Redirect::to('users');
	}

}