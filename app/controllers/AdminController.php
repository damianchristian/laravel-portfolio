<?php

class AdminController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		// return View::make('admin.index')->render();
		// return Response::json(User::get());
		return Response::json(array('user'=>Auth::user()->toArray()), 202);
		// return View::make('admin.index')->render();
		console.log('user');
	}

	public function show($id)
	{
		return Response::json(User::find($id));
	}

	public function logout(){
		Auth::logout();
		return Redirect::to('/');
	}

}