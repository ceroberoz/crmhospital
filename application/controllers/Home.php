<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if($this->ion_auth->logged_in())
		{
			$this->load->view('welcome_message');
		}
		else
		{
			$this->load->view('login');
		}
		
	}
}
