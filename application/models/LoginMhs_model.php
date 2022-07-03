<?php
class LoginMhs_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function login($nim, $password)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('nim', $nim);
		$this->db->where('password', $password);
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

	// public function insertCustomer($data, $table)
	// {
	// 	$this->db->insert($table, $data);
	// 	$exist = $this->db->affected_rows();
	// 	if ($exist > 0) {
	// 		return $result = array('error' => 0);
	// 	} else {
	// 		return $result = array('error' => 1);
	// 	}
	// }

	// public function validasiEmail($email, $table)
	// {
	// 	$query = $this->db->select('email')
	// 		->from($table)
	// 		->where('email', $email)
	// 		->get();

	// 	$validasi = $query->num_rows();

	// 	if ($validasi > 0) {
	// 		return $result = array('validasi' => 0);
	// 	} else {
	// 		return $result = array('validasi' => 1);
	// 	}
	// }
}
