<?php
class Perwalian extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa/Perwalian_model', 'm');
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

		$pj_angkatan = $this->session->userdata('angkatan');
		$dosen = $this->m->getDosen($pj_angkatan);

		// print_r($dosen);die;

		$data = [
			'dosen' => $dosen
		];

		$this->load->view('TemplateMahasiswa/Header');
		$this->load->view('Mahasiswa/Perwalian',$data);
		$this->load->view('TemplateMahasiswa/Footer');
	}

}
