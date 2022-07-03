<?php
class Pengumuman_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function getPengumuman($angkatan)
	{
		$query = $this->db->select('*')
			->from('pengumuman')
			->where('angkatan',$angkatan)
			->order_by('id_pengumuman', 'desc')
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
