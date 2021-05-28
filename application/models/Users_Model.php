<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif_model extends CI_Model {

	public function getAll()
	{
		return $this->db->get('alternatif')->result();
	}
}