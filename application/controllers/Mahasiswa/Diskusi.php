<?php
class Diskusi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa/Diskusi_model', 'm');
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
		$diskusi = $this->m->getDiskusi($nim);

		$data = [
			'nim' => $nim,
			'diskusi' => $diskusi,
		];

		$this->load->view('TemplateMahasiswa/Header');
		$this->load->view('Mahasiswa/Diskusi', $data);
		$this->load->view('TemplateMahasiswa/Footer');
	}

	public function tambahDiskusi()
	{
		$nim = $this->session->userdata('nim');
		$isi = $this->input->post('isi');
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date('d-m-Y H:i:s');
		$username = $this->session->userdata('username');

		$data = [
			'nim' => $nim,
			'pengirim' => $username,
			'isi' => $isi,
			'tanggal' => $tanggal
		];

		$this->m->push($data);
		redirect(base_url().'Mahasiswa/Diskusi');
	}
}
