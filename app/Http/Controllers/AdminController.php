<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller {

	/**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->user = "admin";
        $this->middleware('admin');
    }


	public function getHome() {

		echo "Admin Logged In<br/>";
		echo "<a href='".action('Auth\AdminController@getLogout')."'>Logout</a>";
        dd(\Auth::user('admin'));
	}
}