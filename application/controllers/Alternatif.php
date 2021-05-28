<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    if (!$this->ion_auth->logged_in()) {
        redirect('auth');
    }     
       $this->load->model('alternatif_model', 'am');
       $this->load->model('pilihan_kriteria_model', 'pkm');
       $this->load->model('Nilai_model', 'nilai');
    }

    public function index()
    {
        $alternatif = $this->am->getAll();
        $title = "Data alternatif";
        $data = array(
            'alternatif' =>  $alternatif,
            'title' => $title,
        );
        $this->template->load('template/template_v', 'alternatif/alternatif_view', $data);
    }

	public function tambah()
	{
	    $data = array(
	        'nama_alternatif'  => $this->input->post('nama_alternatif'),
	        'harga' => $this->input->post('harga'),
	        'jenis_aroma' => $this->input->post('jenis_aroma'),
	        'komposisi' => $this->input->post('komposisi'),
	        'ketahanan' => $this->input->post('ketahanan')
	    );

	    
	    	$this->am->tambahData($data);
	    	$insert_id = $this->db->insert_id();
	    	if(!empty($this->input->post('harga'))) {
	    		
		    	$kriteria_id = "4";
		    	$nilai = "";
		    	$nama_pilihan_kriteria = "";
		    	if($this->input->post('harga') < 15000) {
		    		$nilai = "5";
		    		$nama_pilihan_kriteria = "< Rp.15.000";
		    	} else if($this->input->post('harga') >= 15000 && $this->input->post('harga') < 50000) {
		    		$nilai = "4";
		    		$nama_pilihan_kriteria = ">= Rp.15.000 dan < Rp.50.000";
		    	} else if($this->input->post('harga') >= 50000 && $this->input->post('harga') < 150000) {
		    		$nilai = "3";
		    		$nama_pilihan_kriteria = ">= Rp.50.000 dan < Rp.150.000";
		    	} else if($this->input->post('harga') >= 150000 && $this->input->post('harga') < 400000) {
		    		$nilai = "2";
		    		$nama_pilihan_kriteria = ">= Rp.150.000 dan < Rp.400.000";
		    	} else {
		    		$nilai = "1";
		    		$nama_pilihan_kriteria = "> Rp.400.000";
		    	}

		    	$dataHarga = array(
	        		'kriteria_id'  => $kriteria_id,
	        		'nama_pilihan_kriteria' => $nama_pilihan_kriteria,
	        		'nilai' => $nilai
	    		);
	    		$this->pkm->tambahData($dataHarga);
	    		$insert_id_pkm = $this->db->insert_id();
	    		$dataNilai = array(
	        		'alternatif_id'  => $insert_id,
	        		'kriteria_id' => $kriteria_id,
	        		'pilihan_kriteria_id' => $insert_id_pkm
	    		);
	    		$this->nilai->tambahData($dataNilai);
			}

			if(!empty($this->input->post('jenis_aroma'))) {
		    	$kriteria_id = "1";
		    	$nilai = "";
		    	$nama_pilihan_kriteria = "";
		    	if($this->input->post('jenis_aroma') == "Lemah") {
		    		$nilai = "1";
		    		$nama_pilihan_kriteria = "Lemah";
		    	} else if($this->input->post('jenis_aroma') == "Sedang") {
		    		$nilai = "3";
		    		$nama_pilihan_kriteria = "Sedang";
		    	} else {
		    		$nilai = "2";
		    		$nama_pilihan_kriteria = "Kuat";
		    	}

		    	$dataJenisAroma = array(
	        		'kriteria_id'  => $kriteria_id,
	        		'nama_pilihan_kriteria' => $nama_pilihan_kriteria,
	        		'nilai' => $nilai
	    		);
	    		$this->pkm->tambahData($dataJenisAroma);
	    		$insert_id_pkm = $this->db->insert_id();
	    		$dataNilai = array(
	        		'alternatif_id'  => $insert_id,
	        		'kriteria_id' => $kriteria_id,
	        		'pilihan_kriteria_id' => $insert_id_pkm
	    		);
	    		$this->nilai->tambahData($dataNilai);
			}

			if(!empty($this->input->post('komposisi'))) {
		    	$kriteria_id = "3";
		    	$nilai = "";
		    	$nama_pilihan_kriteria = "";
		    	if($this->input->post('komposisi') == "25% Bibit : 75% Alkohol") {
		    		$nilai = "1";
		    		$nama_pilihan_kriteria = "25% Bibit : 75% Alkohol";
		    	} else if($this->input->post('komposisi') == "50% Bibit : 50% Alkohol") {
		    		$nilai = "2";
		    		$nama_pilihan_kriteria = "50% Bibit : 50% Alkohol";
		    	} else {
		    		$nilai = "3";
		    		$nama_pilihan_kriteria = "75% Bibit : 25% Alkohol";
		    	}

		    	$dataKomposisi = array(
	        		'kriteria_id'  => $kriteria_id,
	        		'nama_pilihan_kriteria' => $nama_pilihan_kriteria,
	        		'nilai' => $nilai
	    		);
	    		$this->pkm->tambahData($dataKomposisi);
	    		$insert_id_pkm = $this->db->insert_id();
	    		$dataNilai = array(
	        		'alternatif_id'  => $insert_id,
	        		'kriteria_id' => $kriteria_id,
	        		'pilihan_kriteria_id' => $insert_id_pkm
	    		);
	    		$this->nilai->tambahData($dataNilai);
			}

			if(!empty($this->input->post('ketahanan'))) {
		    	$kriteria_id = "2";
		    	$nilai = "";
		    	$nama_pilihan_kriteria = "";
		    	if($this->input->post('ketahanan') == "< 2 Jam") {
		    		$nilai = "1";
		    		$nama_pilihan_kriteria = "< 2 Jam";
		    	} else if($this->input->post('ketahanan') == ">= 2 Jam dan < 5Jam") {
		    		$nilai = "2";
		    		$nama_pilihan_kriteria = ">= 2Jam dan  < 5 Jam";
		    	} else if($this->input->post('ketahanan') == ">= 5 Jam dan < 8 Jam") {
		    		$nilai = "3";
		    		$nama_pilihan_kriteria = ">= 5 Jam dan < 8 Jam";
		    	} else {
		    		$nilai = "4";
		    		$nama_pilihan_kriteria = ">= 8 Jam";
		    	}


		    	$dataKetahanan = array(
	        		'kriteria_id'  => $kriteria_id,
	        		'nama_pilihan_kriteria' => $nama_pilihan_kriteria,
	        		'nilai' => $nilai
	    		);
	    		$this->pkm->tambahData($dataKetahanan);
	    		$insert_id_pkm = $this->db->insert_id();
	    		$dataNilai = array(
	        		'alternatif_id'  => $insert_id,
	        		'kriteria_id' => $kriteria_id,
	        		'pilihan_kriteria_id' => $insert_id_pkm
	    		);
	    		$this->nilai->tambahData($dataNilai);
			}

	    	$this->session->set_flashdata('success', 'Data berhasil disimpan!');
	    	redirect('alternatif');
	    
	}
	
	public function hapus($id_alternatif)
	{
		$this->am->hapusData($id_alternatif);
		$this->session->set_flashdata('flash', 'Berhasil Dihapus');
		redirect('alternatif');
	}

	public function ubah()
    {
    	$id_alternatif = $this->input->post('id_alternatif');
	    $data = array(
	        'nama_alternatif'  => $this->input->post('nama_alternatif'),
	        'harga' => $this->input->post('harga'),
	        'jenis_aroma' => $this->input->post('jenis_aroma'),
	        'komposisi' => $this->input->post('komposisi'),
	        'ketahanan' => $this->input->post('ketahanan')
	    );
	    	$this->am->ubahData($data,$id_alternatif);

	    	if(!empty($this->input->post('harga'))) {
	    		
		    	$kriteria_id = "4";
		    	$nilai = "";
		    	$nama_pilihan_kriteria = "";
		    	if($this->input->post('harga') < 15000) {
		    		$nilai = "5";
		    		$nama_pilihan_kriteria = "< Rp.15.000";
		    	} else if($this->input->post('harga') >= 15000 && $this->input->post('harga') < 50000) {
		    		$nilai = "4";
		    		$nama_pilihan_kriteria = ">= Rp.15.000 dan < Rp.50.000";
		    	} else if($this->input->post('harga') >= 50000 && $this->input->post('harga') < 150000) {
		    		$nilai = "3";
		    		$nama_pilihan_kriteria = ">= Rp.50.000 dan < Rp.150.000";
		    	} else if($this->input->post('harga') >= 150000 && $this->input->post('harga') < 400000) {
		    		$nilai = "2";
		    		$nama_pilihan_kriteria = ">= Rp.150.000 dan < Rp.400.000";
		    	} else {
		    		$nilai = "1";
		    		$nama_pilihan_kriteria = "> Rp.400.000";
		    	}

		    	$dataNilai = $this->nilai->get_data_by_id($id_alternatif, $kriteria_id); 
		    	$dataHarga = array(
	        		'kriteria_id'  => $kriteria_id,
	        		'nama_pilihan_kriteria' => $nama_pilihan_kriteria,
	        		'nilai' => $nilai
	    		);

	    		$this->pkm->ubahData($dataHarga, $dataNilai['pilihan_kriteria_id']);
			}

			if(!empty($this->input->post('jenis_aroma'))) {
		    	$kriteria_id = "1";
		    	$nilai = "";
		    	$nama_pilihan_kriteria = "";
		    	if($this->input->post('jenis_aroma') == "Lemah") {
		    		$nilai = "1";
		    		$nama_pilihan_kriteria = "Lemah";
		    	} else if($this->input->post('jenis_aroma') == "Sedang") {
		    		$nilai = "3";
		    		$nama_pilihan_kriteria = "Sedang";
		    	} else {
		    		$nilai = "2";
		    		$nama_pilihan_kriteria = "Kuat";
		    	}

		    	$dataNilai = $this->nilai->get_data_by_id($id_alternatif, $kriteria_id); 
		    	$dataJenisAroma = array(
	        		'kriteria_id'  => $kriteria_id,
	        		'nama_pilihan_kriteria' => $nama_pilihan_kriteria,
	        		'nilai' => $nilai
	    		);

	    		$this->pkm->ubahData($dataJenisAroma, $dataNilai['pilihan_kriteria_id']);
			}

			if(!empty($this->input->post('komposisi'))) {
		    	$kriteria_id = "3";
		    	$nilai = "";
		    	$nama_pilihan_kriteria = "";
		    	if($this->input->post('komposisi') == "25% Bibit : 75% Alkohol") {
		    		$nilai = "1";
		    		$nama_pilihan_kriteria = "25% Bibit : 75% Alkohol";
		    	} else if($this->input->post('komposisi') == "50% Bibit : 50% Alkohol") {
		    		$nilai = "2";
		    		$nama_pilihan_kriteria = "50% Bibit : 50% Alkohol";
		    	} else {
		    		$nilai = "3";
		    		$nama_pilihan_kriteria = "75% Bibit : 25% Alkohol";
		    	}

		    	$dataNilai = $this->nilai->get_data_by_id($id_alternatif, $kriteria_id); 
		    	$dataKomposisi = array(
	        		'kriteria_id'  => $kriteria_id,
	        		'nama_pilihan_kriteria' => $nama_pilihan_kriteria,
	        		'nilai' => $nilai
	    		);

	    		$this->pkm->ubahData($dataKomposisi, $dataNilai['pilihan_kriteria_id']);
			}

			if(!empty($this->input->post('ketahanan'))) {
		    	$kriteria_id = "2";
		    	$nilai = "";
		    	$nama_pilihan_kriteria = "";
		    	if($this->input->post('ketahanan') == "< 2 Jam") {
		    		$nilai = "1";
		    		$nama_pilihan_kriteria = "< 2 Jam";
		    	} else if($this->input->post('ketahanan') == ">= 2 Jam dan < 5Jam") {
		    		$nilai = "2";
		    		$nama_pilihan_kriteria = ">= 2Jam dan  < 5 Jam";
		    	} else if($this->input->post('ketahanan') == ">= 5 Jam dan < 8 Jam") {
		    		$nilai = "3";
		    		$nama_pilihan_kriteria = ">= 5 Jam dan < 8 Jam";
		    	} else {
		    		$nilai = "4";
		    		$nama_pilihan_kriteria = ">= 8 Jam";
		    	}

		    	$dataNilai = $this->nilai->get_data_by_id($id_alternatif, $kriteria_id); 
		    	$dataKetahanan = array(
	        		'kriteria_id'  => $kriteria_id,
	        		'nama_pilihan_kriteria' => $nama_pilihan_kriteria,
	        		'nilai' => $nilai
	    		);

	    		$this->pkm->ubahData($dataKetahanan, $dataNilai['pilihan_kriteria_id']);
			}

	    	$this->session->set_flashdata('success', 'Data berhasil diubah!');
	    	redirect('alternatif');
	    
	}

	public function pdf(){
		$this->load->library('dompdf_gen');

		$data['alternatif'] = $this->am->getAll();

		$this->load->view('alternatif/laporan_pdf',$data);

		$paper_size = 'A4';
		$orientation= 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_alternatif.pdf", array('Attachment' => 0));
	}
}


/* End of file alternatif.php */
/* Location: ./application/controllers/alternatif.php */
