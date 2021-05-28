<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif_model extends CI_Model {

	public function getAll()
	{
		return $this->db->get('alternatif')->result();
	}

	public function dashboard()
	{
	    return $this->db->get('alternatif');
	}	

	public function tambahData($data)
	{
		$this->db->insert('alternatif', $data);
    	return TRUE;
	}

	public function getNilaiAlternatif($alternatif_id, $kriteria_id)
	{
	    $this->db->select('pilihan_kriteria.nilai');
		$this->db->from('nilai');
		$this->db->join('pilihan_kriteria', 'nilai.pilihan_kriteria_id = pilihan_kriteria.id_pilihan_kriteria');
		$this->db->where(['nilai.alternatif_id' => $alternatif_id, 'nilai.kriteria_id' => $kriteria_id]);
		$query = $this->db->get();
		return $query->result();
	}

	public function getNilaiMax($kriteria_id) 
	{
		$sql = "SELECT pilihan_kriteria.nilai FROM nilai INNER JOIN pilihan_kriteria ON nilai.pilihan_kriteria_id = pilihan_kriteria.id_pilihan_kriteria WHERE nilai.kriteria_id = '".$kriteria_id."' ORDER BY pilihan_kriteria.nilai DESC LIMIT 1 ";
        return $this->db->query($sql)->result();
	}

	public function getNilaiMin($kriteria_id) 
	{
		$sql = "SELECT pilihan_kriteria.nilai FROM nilai INNER JOIN pilihan_kriteria ON nilai.pilihan_kriteria_id = pilihan_kriteria.id_pilihan_kriteria WHERE nilai.kriteria_id = '".$kriteria_id."' ORDER BY pilihan_kriteria.nilai ASC LIMIT 1 ";
        return $this->db->query($sql)->result();
	}

	public function getNilaiBobot($kriteria_id) 
	{
		$sql = "select bobot_kriteria from kriteria where id_kriteria = '".$kriteria_id."'";
        return $this->db->query($sql)->result();
	}

	public function getNamaAlternatif($id_alternatif) 
	{
		$sql = "select nama_alternatif from alternatif where id_alternatif = '".$id_alternatif."'";
        return $this->db->query($sql)->row();
	}


	
	public function hapusData($id_alternatif)
	{
		$this->db->where('id_alternatif', $id_alternatif); 	
		$this->db->delete('alternatif');
	}

	public function getAltByid($id)
	{
		return $this->db->get_where('alternatif', ['id_alternatif' => $id])->row_array();	
	}

	public function ubahData($data,$id_alternatif)
	{
	    $this->db->where('id_alternatif',$id_alternatif);
	    $this->db->update('alternatif', $data);
	    return TRUE;
	}

}