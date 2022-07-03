<?php
class PengumumanMahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dosen/PengumumanMhs_model', 'm');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));

		if ($this->session->userdata('roles') != "2") {
			redirect(base_url().'Dosen');
		}
	}


	public function index()
	{
		$pj_angkatan = $this->session->userdata('pj_angkatan');
		$pengumuman = $this->m->getPengumuman($pj_angkatan);
		// print_r($pengumuman);die;

		$data = [
			'pengumuman'=> $pengumuman
		];
		$this->load->view('TemplateDosen/Header');
		$this->load->view('Dosen/PengumumanMahasiswa',$data);
		$this->load->view('TemplateDosen/Footer');
	}

	public function tambahPengumuman()
	{
		$pj_angkatan = $this->session->userdata('pj_angkatan');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date('d-m-Y H:i:s');

		$data = [
			'angkatan' => $pj_angkatan,
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'tanggal' => $tanggal,
		];

		$this->m->push($data);
		redirect(base_url().'Dosen/PengumumanMahasiswa');
	}

	public function detailPengumuman($id_pengumuman)
	{
		$pengumuman = $this->m->getDetailPengumuman($id_pengumuman);
		$diskusi = $this->m->getDiskusi($id_pengumuman);
	
		$data = [
			'pengumuman' => $pengumuman,
			'diskusi' => $diskusi,
		];
		$this->load->view('TemplateDosen/Header');
		$this->load->view('Dosen/DetailPengumuman',$data);
		$this->load->view('TemplateDosen/Footer');
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
		redirect(base_url() . 'Dosen/PengumumanMahasiswa/detailPengumuman/'.$id_pengumuman);
	}

}
