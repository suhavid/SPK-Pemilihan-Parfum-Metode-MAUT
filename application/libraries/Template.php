<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {
		var $template_data = array();
		
		function set($name, $value)
		{
			$this->template_data[$name] = $value;
		}
	
		function load($template = '', $view = '' , $view_data = array(), $return = FALSE)
		{               
			$this->CI =& get_instance();
			$this->set('contents', $this->CI->load->view($view, $view_data, TRUE));			
			return $this->CI->load->view($template, $this->template_data, $return);
		}

		public function count_user(){
			$this->CI->load->model('user_model');
			return $this->CI->user_model->dashboard()->num_rows();
		}

		public function count_alternatif(){
			$this->CI->load->model('alternatif_model');
			return $this->CI->alternatif_model->dashboard()->num_rows();
		}

		public function count_kriteria(){
			$this->CI->load->model('kriteria_model');
			return $this->CI->kriteria_model->dashboard()->num_rows();
		}

		public function count_pilihan_kriteria(){
			$this->CI->load->model('pilihan_kriteria_model');
			return $this->CI->pilihan_kriteria_model->dashboard()->num_rows();
		}

}

/* End of file Template.php */
/* Locatiopn: ./system/application/libraries/Template.php */