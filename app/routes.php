<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('users', function()
{
  // $users = User::all();

  // $user = new User;

  // $user->name = 'Johnsss';
  // $user->email = 'Johnss@gmail.com';

  $user->save();

  // $users = User::where('name', '=', 'weerapat')->get();

  // foreach ($users as $user)
  // {
  //     var_dump($user->name);
  // }
    return View::make('users')->with('users', $users);
});