<?php
class HalamanUtama extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LoginMhs_model', 'm');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));

		if ($this->session->userdata('roles') != "1") {
			redirect(base_url());
		}
	}


	public function index()
	{
		// printf($this->session->userdata('nim'));die;

		$this->load->view('TemplateMahasiswa/Header');
		$this->load->view('Mahasiswa/HalamanUtama');
		$this->load->view('TemplateMahasiswa/Footer');
	}

}
