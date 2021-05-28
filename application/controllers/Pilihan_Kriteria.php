<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pilihan_Kriteria extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    if (!$this->ion_auth->logged_in()) {
        redirect('auth');
    }     
       $this->load->model('Pilihan_Kriteria_model', 'pkm');
       $this->load->model('Kriteria_model', 'km');
    }

    public function index()
    {
        $pilihan_kriteria = $this->pkm->getAll();
        $kriteria = $this->km->getAll();
        $title = "Data pilihan_kriteria";
        $data = array(
            'pilihan_kriteria' =>  $pilihan_kriteria,
            'kriteria' =>  $kriteria,
            'title' => $title
        );
        $this->template->load('template/template_v', 'pilihan_kriteria/pilihan_kriteria_view', $data);
    }

	public function tambah()
	{
	    $data = array(
	        'kriteria_id' => $this->input->post('kriteria_id'),
	        'nama_pilihan_kriteria'  => $this->input->post('nama_pilihan_kriteria'),
	        'nilai' => $this->input->post('nilai')
	    );
	    	$this->pkm->tambahData($data);
	    	$this->session->set_flashdata('success', 'Data berhasil disimpan!');
	    	redirect('pilihan_kriteria');
	    
	}
	
	public function hapus($id_pilihan_kriteria)
	{
		$this->pkm->hapusData($id_pilihan_kriteria);
		$this->session->set_flashdata('flash', 'Berhasil Dihapus');
		redirect('pilihan_kriteria');
	}

	public function ubah()
    {
    	$id_pilihan_kriteria = $this->input->post('id_pilihan_kriteria');
	    $data = array(
	        'kriteria_id' => $this->input->post('kriteria_id'),
	        'nama_pilihan_kriteria'  => $this->input->post('nama_pilihan_kriteria'),
	        'nilai' => $this->input->post('nilai')
	    );
	    	$this->pkm->ubahData($data,$id_pilihan_kriteria);
	    	$this->session->set_flashdata('success', 'Data berhasil diubah!');
	    	redirect('pilihan_kriteria');
	    
	}

	public function pdf(){
		$this->load->library('dompdf_gen');

		$data['pilihan_kriteria'] = $this->pkm->getAll();

		$this->load->view('pilihan_kriteria/laporan_pdf',$data);

		$paper_size = 'A4';
		$orientation= 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_pilihan_kriteria.pdf", array('Attachment' => 0));
	}
}


/* End of file pilihan_kriteria.php */
/* Location: ./application/controllers/pilihan_kriteria.php */
