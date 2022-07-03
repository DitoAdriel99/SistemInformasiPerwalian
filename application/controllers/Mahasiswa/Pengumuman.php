<?php
class Pengumuman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa/Pengumuman_model', 'm');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));

		if ($this->session->userdata('roles') != "1") {
			redirect(base_url());
		}
	}


	public function index()
	{
		$angkatan = $this->session->userdata('angkatan');
		$pengumuman = $this->m->getPengumuman($angkatan);

		$data = [
			'pengumuman' => $pengumuman
		];
		$this->load->view('TemplateMahasiswa/Header');
		$this->load->view('Mahasiswa/Pengumuman',$data);
		$this->load->view('TemplateMahasiswa/Footer');
	}

	public function detailPengumuman($id_pengumuman)
	{
		$pengumuman = $this->m->getDetailPengumuman($id_pengumuman);
		$diskusi = $this->m->getDiskusi($id_pengumuman);
		// print_r($diskusi);die;
		$data = [
			'pengumuman' => $pengumuman,
			'diskusi' => $diskusi,
		];
		$this->load->view('TemplateMahasiswa/Header');
		$this->load->view('Mahasiswa/DetailPengumuman',$data);
		$this->load->view('TemplateMahasiswa/Footer');
	}

	public function tambahCatatan()
	{
		$id_pengumuman = $this->input->post('id_pengumuman');
		$isi = $this->input->post('isi');
		$id_user = $this->input->post('id_user');

		$data = [
			'id_pengumuman' => $id_pengumuman,
			'isi' => $isi,
			'id_user' => $id_user
		];

		$this->db->insert('diskusi_pengumuman',$data);
		redirect(base_url() . 'Mahasiswa/Pengumuman/detailPengumuman/'.$id_pengumuman);
	}

}
