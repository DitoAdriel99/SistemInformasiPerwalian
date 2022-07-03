<?php
class Surat_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function getSurat($nim)
	{
		$query = $this->db->select('*')
			->from('surat')
			->where('nim',$nim)
			->order_by('id_surat','desc')
			->get();
		return $query->row();
	}


}
