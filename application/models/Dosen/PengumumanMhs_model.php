<?php
class PengumumanMhs_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function push($data)
	{
		$this->db->insert('pengumuman',$data);
	}

	public function getPengumuman($pj_angkatan)
	{
		$query = $this->db->select('*')
			->from('pengumuman')
			->where('angkatan', $pj_angkatan)
			->get();
		return $query->result();
	}

	public function getDetailPengumuman($id_pengumuman)
	{
		$query = $this->db->select('*')
			->from('pengumuman')
			->where('id_pengumuman',$id_pengumuman)
			->get();
		return $query->row();
	}

	public function getDiskusi($id_pengumuman)
	{
		$query = $this->db->select('dp.*, tu.*')
			->from('diskusi_pengumuman dp')
			->join('users tu','dp.id_user = tu.id_user')
			->where('id_pengumuman', $id_pengumuman)
			->get();
		return $query->result();		
	}
	
	
}
