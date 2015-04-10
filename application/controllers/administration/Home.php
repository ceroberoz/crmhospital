<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Administration_Controller {

	public function __construct()
        {
            parent::__construct();
            // Your own constructor code
            $this->load->model('madministration');
        }

	public function index()
	{

		// get patient list w/ status
		$data['todos'] = $this->madministration->getAdministrationList();
		$this->load->view('cpanel/administration_list',$data);
	}

	function edit()
	{
		$data['todos'] = $this->madministration->getAdministrationList();
		$data['patient'] = $this->madministration->getPatientList();
		$data['doctor'] = $this->madministration->getDoctorList();

		$this->load->view('cpanel/administration_edit',$data);
	}

	function do_edit()
	{
		$this->madministration->doEditAdministration();
		redirect('administration/home');
	}
}
