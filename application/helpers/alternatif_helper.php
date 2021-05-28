<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('alternatif'))
{
    function get_nilai_alternatif($alternatif_id, $kriteria_id)
    {
    	$CI = get_instance();

	    // You may need to load the model if it hasn't been pre-loaded
	    $CI->load->model('Alternatif_model');

	    // Call a function of the model
	    $data_nilai_alternatif  = $CI->Alternatif_model->getNilaiAlternatif($alternatif_id, $kriteria_id);

	    if(count($data_nilai_alternatif) > 0) {
        	return $data_nilai_alternatif[0]->nilai;
      	} else {
        	return 0;
      	}
    }

    function get_nilai_max($kriteria_id)
    {
      $CI = get_instance();

      // You may need to load the model if it hasn't been pre-loaded
      $CI->load->model('Alternatif_model');

      // Call a function of the model
      $data_nilai_alternatif  = $CI->Alternatif_model->getNilaiMax($kriteria_id);

      if(count($data_nilai_alternatif) > 0) {
          return $data_nilai_alternatif[0]->nilai;
        } else {
          return 0;
        }
    }

    function get_nilai_min($kriteria_id)
    {
      $CI = get_instance();

      // You may need to load the model if it hasn't been pre-loaded
      $CI->load->model('Alternatif_model');

      // Call a function of the model
      $data_nilai_alternatif  = $CI->Alternatif_model->getNilaiMin($kriteria_id);

      if(count($data_nilai_alternatif) > 0) {
          return $data_nilai_alternatif[0]->nilai;
        } else {
          return 0;
        }
    }

    function get_nilai_bobot($kriteria_id)
    {
      $CI = get_instance();

      // You may need to load the model if it hasn't been pre-loaded
      $CI->load->model('Alternatif_model');

      // Call a function of the model
      $data_nilai_alternatif  = $CI->Alternatif_model->getNilaiBobot($kriteria_id);

      if(count($data_nilai_alternatif) > 0) {
          return $data_nilai_alternatif[0]->bobot_kriteria;
        } else {
          return 0;
        }
    }

    function get_nama_alternatif($id_alternatif)
    {
      $CI = get_instance();

      // You may need to load the model if it hasn't been pre-loaded
      $CI->load->model('Alternatif_model');

      // Call a function of the model
      $data_nilai_alternatif  = $CI->Alternatif_model->getNamaAlternatif($id_alternatif);

      return $data_nilai_alternatif->nama_alternatif;
    }   
}