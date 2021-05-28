<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria_model extends CI_Model {

	public function getAll()
	{
		return $this->db->get('kriteria')->result();
	}


	public function dashboard()
	{
	    return $this->db->get('kriteria');
	}	

	public function tambahData($data)
	{
		$this->db->insert('kriteria', $data);
    	return TRUE;
	}
	
	public function hapusData($id_kriteria)
	{
		$this->db->where('id_kriteria', $id_kriteria); 	
		$this->db->delete('kriteria');
	}

	public function getByid($id)
	{
		return $this->db->get_where('kriteria', ['id_kriteria' => $id])->row_array();	
	}

	public function ubahData($data,$id_kriteria)
	{
	    $this->db->where('id_kriteria',$id_kriteria);
	    $this->db->update('kriteria', $data);
	    return TRUE;
	}

}