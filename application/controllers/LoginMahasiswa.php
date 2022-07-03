<?php
class LoginMahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LoginMhs_model', 'm');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
	}


	public function index()
	{
		$this->load->view('ViewLoginMahasiswa');
	}

	public function proses_login()
	{
		$nim = $this->input->post('nim');
		$password = $this->input->post('password');

		// print_r($nim);die;

		$cekLogin = $this->m->login($nim, $password);

		if ($cekLogin) {
			foreach ($cekLogin as $row);
			$this->session->set_userdata('id_user', $row->id_user);
			$this->session->set_userdata('username', $row->username);
			$this->session->set_userdata('email', $row->email);
			$this->session->set_userdata('ipk', $row->ipk);
			$this->session->set_userdata('angkatan', $row->angkatan);
			$this->session->set_userdata('roles', $row->roles);
			$this->session->set_userdata('nim', $row->nim);

			if ($this->session->userdata('roles') == ('1')) {
				redirect('Mahasiswa/HalamanUtama');
			} else {
				redirect(base_url());
			} 
		} else {
			$data['pesan'] = "Harap Periksa Kembali Username & Password!";
			$this->load->view('viewLoginMahasiswa', $data);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
