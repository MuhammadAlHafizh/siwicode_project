<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clandingpage extends CI_Controller {
    function __construct(){

		parent::__construct();
		$this->load->model('Mlandingpage');
	}

	public function index()
	{
        $wisata = $this->Mlandingpage->getWisata();
        $data['wisata'] = $wisata;


        $this->load->view('siwikode/template/header');
		$this->load->view('siwikode/Vlandingpage', $data);
        $this->load->view('siwikode/template/footer.php');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url("index.php/Clandingpage/"));
	}
}
