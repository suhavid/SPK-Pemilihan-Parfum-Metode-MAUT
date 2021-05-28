<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    if (!$this->ion_auth->logged_in()) {
        redirect('auth');
    }     
       $this->load->model('Kriteria_model', 'km');
       $this->load->model('Pilihan_Kriteria_model', 'pkm');
    }

    public function index()
    {
        $kriteria = $this->km->getAll();
        $pilihan_kriteria = $this->pkm->getAll();
        $title = "Data kriteria";
        $data = array(
            'kriteria' =>  $kriteria,
            'pilihan_kriteria' =>  $pilihan_kriteria,
            'title' => $title,
        );
        $this->template->load('template/template_v', 'kriteria/kriteria_view', $data);
    }

    public function edit($id)
    {
        $data = $this->km->getByid($id);
        echo json_encode($data);
    }

	public function ubah()
    {
    	$id_kriteria = $this->input->post('id_kriteria');
	    $data = array(
	        'nama_kriteria'  => $this->input->post('nama_kriteria'),
	        'bobot_kriteria' => $this->input->post('bobot_kriteria')
	    );
	    	$this->km->ubahData($data,$id_kriteria);
	    	$this->session->set_flashdata('success', 'Data berhasil diubah!');
	    	redirect('kriteria');
	}

	public function pdf(){
		$this->load->library('dompdf_gen');

		$data['kriteria'] = $this->km->getAll();

		$this->load->view('kriteria/laporan_pdf',$data);

		$paper_size = 'A4';
		$orientation= 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_kriteria.pdf", array('Attachment' => 0));
	}
}


/* End of file kriteria.php */
/* Location: ./application/controllers/kriteria.php */
