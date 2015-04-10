<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends Administration_Controller {

	public function __construct()
        {
            parent::__construct();
            // Your own constructor code
            $this->load->model('madministration');
        }

	public function index()
	{

		// get patient list w/ status
		$data['patients'] = $this->madministration->getPatientList();
		$this->load->view('cpanel/administration_patient_list',$data);
	}

	function add()
	{
		$config = array(
            'upload_path' => './uploads/user/identity/',
            'allowed_types' => 'jpg|jpeg|gif|png|pdf',
            'encrypt_name' => TRUE
		);

		$this->load->library('upload');
		$this->upload->initialize($config);

		$avatar = "upload_identifier";
		$this->upload->do_upload($avatar);

		$this->madministration->addPatient($avatar);
		redirect('administration/home');
	}
	
	function edit()
	{
		$data['patients'] = $this->madministration->getPatientList();
		$data['cities'] = $this->madministration->getCitiesList();
		$data['provinces'] = $this->madministration->getProvincesList();

		$this->load->view('cpanel/administration_patient_edit',$data);
	}

	function do_edit()
	{
		$this->madministration->doEditPatient();
		redirect('administration/administration_patient_home');
	}
}
