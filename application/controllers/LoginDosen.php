<?php
class LoginDosen extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LoginDsn_model', 'm');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
	}


	public function index()
	{
		$this->load->view('ViewLoginDosen');
	}

	public function proses_login()
	{
		$nidn = $this->input->post('nidn');
		$password = $this->input->post('password');

		// print_r($nidn);die;

		$cekLogin = $this->m->login($nidn, $password);

		if ($cekLogin) {
			foreach ($cekLogin as $row);
			$this->session->set_userdata('id_user', $row->id_user);
			$this->session->set_userdata('username', $row->username);
			$this->session->set_userdata('email', $row->email);
			$this->session->set_userdata('ipk', $row->ipk);
			$this->session->set_userdata('angkatan', $row->angkatan);
			$this->session->set_userdata('roles', $row->roles);
			$this->session->set_userdata('nidn', $row->nidn);
			$this->session->set_userdata('pj_angkatan', $row->pj_angkatan);

			if ($this->session->userdata('roles') == ('1')) {
				redirect('Mahasiswa/HalamanUtama');
			} else {
				redirect('Dosen/HalamanUtama');

			} 
		} else {
			$data['pesan'] = "Harap Periksa Kembali NIDN & Password!";
			$this->load->view('viewLoginDosen', $data);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'LoginDosen');
	}
}
