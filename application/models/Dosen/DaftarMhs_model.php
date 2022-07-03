<?php
class DaftarMhs_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function getDaftarMahasiswa($pj_angkatan)
	{
		$query = $this->db->select('*')
			->from('users')
			->where('roles',1)
			->where('angkatan', $pj_angkatan)
			->get();
		return $query->result();
	}

	public function getMahasiswa($nim)
	{
		$query = $this->db->select('*')
			->from('users')
			->where('roles',1)
			->where('nim',$nim)
			->get();
		return $query->row();
	}

	public function getDosen($nidn)
	{
		$query = $this->db->select('*')
			->from('users')
			->where('roles',2)
			->where('nidn',$nidn)
			->get();
		return $query->row();
	}

	public function getMatakuliah($nim)
	{
		$query = $this->db->select('*')
			->from('matakuliah')
			->where('nim',$nim)
			->get();
		return $query->result();
	}

	public function getDiskusi($nim)
	{
		$query = $this->db->select('*')
			->from('diskusi')
			->where('nim',$nim)
			->order_by('id_diskusi', 'ASC')
			->get();
		return $query->result();
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

	public function cekSurat($nim)
	{
		$query = $this->db->select('*')
			->from('surat')
			->where('nim',$nim)
			->order_by('id_surat','desc')
			->get();
		return $query->num_rows();
	}

	public function push($data)
	{
		$this->db->insert('diskusi',$data);
	}

	
}
