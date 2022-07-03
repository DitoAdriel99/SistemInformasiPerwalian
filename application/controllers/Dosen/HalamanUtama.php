<?php
class HalamanUtama extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LoginDsn_model', 'm');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));

		if ($this->session->userdata('roles') != "2") {
			redirect(base_url().'Dosen');
		}
	}


	public function index()
	{
		// printf($this->session->userdata('nim'));die;

		$this->load->view('TemplateDosen/Header');
		$this->load->view('Dosen/HalamanUtama');
		$this->load->view('TemplateDosen/Footer');
	}

}
