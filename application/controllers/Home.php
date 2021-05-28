<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
   if (!$this->ion_auth->logged_in()) {
        redirect('auth');
    }        $this->load->model('Home_Model', 'home');
    }

    public function index()
    {
        $title = 'Home';
        $data = array(
            'title' => $title,
        );
        $this->template->load('template/template_v', 'home/home_v', $data);
    }
}
