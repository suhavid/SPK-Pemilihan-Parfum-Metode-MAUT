<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public $data = array();

    public function __construct()
    {
       parent::__construct();
       $this->load->model('kriteria_model', 'km');
       $this->load->model('Alternatif_model','am');
       $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('user/index',);
    }

    public function data_parfum()
    {
    	$alternatif = $this->am->getAll();
        $title = "Data alternatif";
        $data = array(
            'alternatif' =>  $alternatif,
            'title' => $title,
        );
        $this->load->view('user/data_parfum', $data);
    }

    public function perhitungan()
    {
        $data['kriteria'] = $this->km->getAll();
        $data['alternatif'] = $this->am->getAll();
        $this->load->view('user/perhitungan', $data);
    }

    public function metode_perhitungan()
    {
        $data['kriteria'] = $this->km->getAll();
        $data['alternatif'] = $this->am->getAll();
        $this->load->view('user/metode_perhitungan', $data);
    }

    public function save_perhitungan()
    {
        $id = $this->input->post('id_kriteria');

        $sum = 0;
        foreach ($id as $key => $value) {
            $sum += $_POST['bobot_kriteria'][$key];
        }

        if($sum <= 100) {
            foreach ($id as $key => $value) {
                $data = [
                    'bobot_kriteria' => $_POST['bobot_kriteria'][$key]
                ];
                $this->km->ubahData($data, $_POST['id_kriteria'][$key]);
            }
            $this->session->set_flashdata('success', '1');
            redirect('user/perhitungan', 'refresh');

        } else {
            $this->session->set_flashdata('success', '0');
            redirect('user/perhitungan', 'refresh');
        }

        
                
    }

    public function save_metode_perhitungan()
    {
        $id = $this->input->post('id_kriteria');

        foreach ($id as $key => $value) {
            $data = [
                'bobot_kriteria' => $_POST['bobot_kriteria'][$key]
            ];
            $this->km->ubahData($data, $_POST['id_kriteria'][$key]);
        }

        redirect('user/metode_perhitungan', 'refresh');
                
    }
 }