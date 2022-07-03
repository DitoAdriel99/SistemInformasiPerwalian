<?php
class Perwalian_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function getDosen($pj_angkatan)
	{
		$query = $this->db->select('*')
			->from('users')
			->where('pj_angkatan',$pj_angkatan)
			->get();
		return $query->row();
	}

}
