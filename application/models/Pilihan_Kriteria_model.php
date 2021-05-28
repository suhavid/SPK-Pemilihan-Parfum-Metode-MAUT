<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pilihan_kriteria_model extends CI_Model {

	public function getAll()
	{
	    $this->db->select('pilihan_kriteria.*, kriteria.nama_kriteria as nama_kriteria');
		$this->db->from('pilihan_kriteria');
		$this->db->join('kriteria','kriteria.id_kriteria = pilihan_kriteria.kriteria_id');
		$query = $this->db->get();
		return $query->result();
	}	

	public function dashboard()
	{
	    return $this->db->get('pilihan_kriteria');
	}	

	public function tambahData($data)
	{
		$this->db->insert('pilihan_kriteria', $data);
    	return TRUE;
	}
	
	public function hapusData($id_pilihan_kriteria)
	{
		$this->db->where('id_pilihan_kriteria', $id_pilihan_kriteria); 	
		$this->db->delete('pilihan_kriteria');
	}

	public function getAltByid($id)
	{
		return $this->db->get_where('pilihan_kriteria', ['id_pilihan_kriteria' => $id])->row_array();	
	}

	public function ubahData($data,$id_pilihan_kriteria)
	{
	    $this->db->where('id_pilihan_kriteria',$id_pilihan_kriteria);
	    $this->db->update('pilihan_kriteria', $data);
	    return TRUE;
	}

}