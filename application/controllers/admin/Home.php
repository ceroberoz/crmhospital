<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller {

	public function __construct()
        {
            parent::__construct();
            // Your own constructor code
            //$this->load->model('madministration');
        }

	public function index()
	{

		// get patient list w/ status
		echo "halo";
	}
}
