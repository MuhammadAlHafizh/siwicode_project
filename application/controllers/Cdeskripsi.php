<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cdeskripsi extends CI_Controller {
    function __construct(){

		parent::__construct();
		$this->load->model('Mdeskripsi');
	}

	public function deskripsi($id)
	{
        $wisata = $this->Mdeskripsi->getWisataID($id);

		$testimoni = $this->Mdeskripsi->getTestimoni();

		$testi = $this->Mdeskripsi->getTesti($id);
		$user_id = $testi->user_id;
		$profesi_id = $testi->profesi_id;


		$userTesti = $this->Mdeskripsi->getUserTesti($user_id);
		$profesiTesti = $this->Mdeskripsi->getProfesiTesti($profesi_id);

		$data = array(
			"wisata" => $wisata,
			"testimoni" => $testimoni,
			"user" => $userTesti,
			"profesi" => $profesiTesti
		);



        $this->load->view('siwikode/template/header');
		$this->load->view('siwikode/Vdeskripsi', $data);
        $this->load->view('siwikode/template/footer.php');
	}

	public function namaProfesi($id){
		$profesiTesti = $this->Mdeskripsi->getProfesiTesti($id);
		return $profesiTesti->nama;
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url("index.php/Clandingpage/"));
	}
}
