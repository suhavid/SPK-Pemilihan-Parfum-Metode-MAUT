<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    if (!$this->ion_auth->logged_in()) {
        redirect('auth');
    }     
       $this->load->model('nilai_model', 'nm');
       $this->load->model('alternatif_model', 'am');
       $this->load->model('kriteria_model', 'km');
       $this->load->model('pilihan_kriteria_model', 'pkm');
    }

    public function index()
    {
    	$alternatif = $this->am->getAll();
    	$pilihan_kriteria = $this->pkm->getAll();
    	$kriteria = $this->km->getAll();
        $nilai = $this->nm->getAll();
        $title = "Data nilai";
        $data = array(
            'nilai' =>  $nilai,
            'alternatif' => $alternatif,
            'kriteria' => $kriteria,
            'pilihan_kriteria' => $pilihan_kriteria,
            'title' => $title
        );
        $this->template->load('template/template_v', 'nilai/nilai_view', $data);
    }

	public function tambah()
	{
	    $data = array(
	        'alternatif_id'  => $this->input->post('alternatif_id'),
	        'kriteria_id' => $this->input->post('kriteria_id'),
	        'pilihan_kriteria_id' => $this->input->post('pilihan_kriteria_id')
	    );
	    	$this->nm->tambahData($data);
	    	$this->session->set_flashdata('success', 'Data berhasil disimpan!');
	    	redirect('nilai');
	    
	}
	
	public function hapus($id_nilai)
	{
		$this->nm->hapusData($id_nilai);
		$this->session->set_flashdata('flash', 'Berhasil Dihapus');
		redirect('nilai');
	}

	public function ubah()
    {
    	$id_nilai = $this->input->post('id_nilai');
	    $data = array(
	        'alternatif_id'  => $this->input->post('alternatif_id'),
	        'kriteria_id' => $this->input->post('kriteria_id'),
	        'pilihan_kriteria_id' => $this->input->post('pilihan_kriteria_id')
	    );
	    	$this->nm->ubahData($data,$id_nilai);
	    	$this->session->set_flashdata('success', 'Data berhasil diubah!');
	    	redirect('nilai');
	    
	}

	public function pdf(){
		$this->load->library('dompdf_gen');

		$data['nilai'] = $this->nm->getAll();

		$this->load->view('nilai/laporan_pdf',$data);

		$paper_size = 'A4';
		$orientation= 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_nilai.pdf", array('Attachment' => 0));
	}
}


/* End of file nilai.php */
/* Location: ./application/controllers/nilai.php */
