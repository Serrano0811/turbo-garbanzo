<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
| This controller re-direct the user to the
| correct view
*/
class Profile
{
	function __construct()
	{
		require('my_controller.php');
	}

	public function index()
	{
		$my_controller = new My_controller();
		$my_controller->wrap_content('Profile');
	}
}