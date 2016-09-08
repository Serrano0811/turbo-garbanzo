<?php
/**
| Generic class to inheritance all the standard
| procedures that all controllers needs.
*/
class My_controller extends CI_Controller
{

	public function wrap_content($view)
	{
		$data['title'] = ''.$view.'';
		$this->load->view('templates/head', $data);
		$this->load->view('templates/navbar');
		$this->load->view($view.'/content.php');
		$this->load->view('templates/foot');
	}
}