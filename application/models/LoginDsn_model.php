<?php
class LoginDsn_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function login($nidn, $password)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('nidn', $nidn);
		$this->db->where('password', $password);
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

}
