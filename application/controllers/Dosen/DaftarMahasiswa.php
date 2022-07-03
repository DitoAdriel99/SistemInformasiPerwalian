<?php
class DaftarMahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dosen/DaftarMhs_model', 'm');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));

		if ($this->session->userdata('roles') != "2") {
			redirect(base_url() . 'Dosen');
		}
	}


	public function index()
	{
		$pj_angkatan = $this->session->userdata('pj_angkatan');

		$daftarMahasiswa = $this->m->getDaftarMahasiswa($pj_angkatan);

		$data = [
			'daftarMhs' => $daftarMahasiswa
		];
		$this->load->view('TemplateDosen/Header');
		$this->load->view('Dosen/DaftarMahasiswa', $data);
		$this->load->view('TemplateDosen/Footer');
	}

	public function detail($nim)
	{
		$mahasiswa = $this->m->getMahasiswa($nim);
		$matakuliah = $this->m->getMatakuliah($nim);
		$surat = $this->m->getSurat($nim);
		$cekSurat = $this->m->cekSurat($nim);

		// print_r($cekSurat);die;

		$data = [
			'mahasiswa' => $mahasiswa,
			'matakuliah' => $matakuliah,
			'surat' => $surat,
			'cekSurat' => $cekSurat,
		];


		$this->load->view('TemplateDosen/Header');
		$this->load->view('Dosen/DetailMahasiswa', $data);
		$this->load->view('TemplateDosen/Footer');
	}

	public function viewDiskusi($nim)
	{
		$mahasiswa = $this->m->getMahasiswa($nim);
		$nidn = $this->session->userdata('nidn');
		$dosen = $this->m->getDosen($nidn);
		$diskusi = $this->m->getDiskusi($nim);

		// print_r($diskusi);die;

		$data = [
			'mahasiswa' => $mahasiswa,
			'dosen' => $dosen,
			'diskusi' => $diskusi
		];

		$this->load->view('TemplateDosen/Header');
		$this->load->view('Dosen/DiskusiMahasiswa', $data);
		$this->load->view('TemplateDosen/Footer');
	}

	public function tambahDiskusi()
	{
		$nim = $this->input->post('nim');
		$nidn = $this->input->post('nidn');
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
		redirect('Dosen/DaftarMahasiswa/viewDiskusi/' .$nim);

		// print_r($data);
	}
}
