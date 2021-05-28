<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_model extends CI_Model {

	public function getAll()
	{
	    $this->db->select('nilai.*, alternatif.nama_alternatif as nama_alternatif, kriteria.nama_kriteria as nama_kriteria, pilihan_kriteria.nama_pilihan_kriteria as nama_pilihan_kriteria, pilihan_kriteria.nilai as nilai');
		$this->db->from('nilai');
		$this->db->join('alternatif', 'alternatif.id_alternatif = nilai.alternatif_id');
		$this->db->join('kriteria', 'kriteria.id_kriteria = nilai.kriteria_id');
		$this->db->join('pilihan_kriteria', 'pilihan_kriteria.id_pilihan_kriteria = nilai.pilihan_kriteria_id');
		$query = $this->db->get();
		return $query->result();
	}	

	public function dashboard()
	{
	    return $this->db->get('nilai');
	}	

	public function tambahData($data)
	{
		$this->db->insert('nilai', $data);
    	return TRUE;
	}
	
	public function hapusData($id_nilai)
	{
		$this->db->where('id_nilai', $id_nilai); 	
		$this->db->delete('nilai');
	}

	public function getByid($id)
	{
		return $this->db->get_where('nilai', ['id_nilai' => $id])->row_array();	
	}

	public function get_data_by_id($id, $id_kriteria)
	{ 
		return $this->db->get_where('nilai', ['alternatif_id' => $id, 'kriteria_id' => $id_kriteria])->row_array();	
	}

	public function ubahData($data,$id_nilai)
	{
	    $this->db->where('id_nilai',$id_nilai);
	    $this->db->update('nilai', $data);
	    return TRUE;
	}

}