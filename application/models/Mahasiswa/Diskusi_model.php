<?php
class Diskusi_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function getDiskusi($nim)
	{
		$query = $this->db->select('*')
			->from('diskusi')
			->where('nim',$nim)
			->get();
		return $query->result();
	}

	public function push($data)
	{
		$this->db->insert('diskusi',$data);
	}

}
