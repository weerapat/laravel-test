<?php

class UserController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function showProfile($id)
    {
        $user = User::find($id);

        return View::make('user-profile', array('user' => $user));
    }


    public function profile()
    {
        $user = new User;

        $user->name = Input::get('name');
        $user->email = Input::get('email');

        $user->save();

        return Redirect::to('/users')->with('message', 'Data Saved');
    }


}