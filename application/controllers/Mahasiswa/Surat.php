<?php
class Surat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa/Surat_model', 'm');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));

		if ($this->session->userdata('roles') != "1") {
			redirect(base_url());
		}
	}


	public function index()
	{
		$nim = $this->session->userdata('nim');
		
		$surat = $this->m->getSurat($nim);
		// print_r($surat);die;

		$data = [
			'surat' => $surat
		];
		$this->load->view('TemplateMahasiswa/Header');
		$this->load->view('Mahasiswa/Surat',$data);
		$this->load->view('TemplateMahasiswa/Footer');
	}

	public function upload()
	{
		$nim = $this->session->userdata('nim');

		$config['upload_path']          = './surat/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10000;
		$config['max_height']           = 10000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('surat')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('TemplateMahasiswa/Header');
			$this->load->view('Mahasiswa/Surat', $error);
			$this->load->view('TemplateMahasiswa/Footer');
		} else {
			$dataUpload = array('upload_data' => $this->upload->data());
			// $this->load->view('upload_success', $dataUpload);
			$data = [
				'nim' => $nim,
				'surat' => $dataUpload['upload_data']['file_name']
			];

			$this->db->insert('surat',$data);
			redirect(base_url().'Mahasiswa/Surat');
		}
	}
}
