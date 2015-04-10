<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Doctor_Controller {

	public function __construct()
        {
            parent::__construct();
            // Your own constructor code
            $this->load->model('mdoctor');
        }

	public function index()
	{

		// get patient list w/ status
		$data['todos'] = $this->mdoctor->getAdministrationList();
		$this->load->view('cpanel/doctor_list',$data);
	}

	function edit()
	{
		$data['todos'] = $this->mdoctor->getAdministrationList();
		$data['treatment'] = $this->mdoctor->getTreatmentList();
		$data['doctor'] = $this->mdoctor->getDoctorList();

		$this->load->view('cpanel/doctor_edit',$data);
	}

	function do_edit()
	{
		$this->mdoctor->doEditAdministration();
		redirect('doctor/home');
	}
}
