<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctestimoni extends CI_Controller {
    function __construct(){

		parent::__construct();
		$this->load->model('Mtestimoni');
	}

	
	public function index()
	{
		$data['testimoni'] = $this->Mtestimoni->getTestimoniAdmin()->result(); //mengambil data
        $this->load->view('dashboard/template/header');
        $this->load->view('dashboard/Vtestimoni', $data);
        $this->load->view('dashboard/template/footer');
	}

    public function aksiHapus($id) {
        $this->Mtestimoni->hapusDataTesti($id);
        redirect(base_url("index.php/Ctestimoni/"));

    }

    public function editTestimoni($id) {
        $data['testi'] = $this->Mtestimoni->findTestimoni($id); //mengambil satu data
        $data['user'] = $this->Mtestimoni->getUserTesti();
        $data['wisata'] = $this->Mtestimoni->getWisataTesti();
        $data['profesi'] = $this->Mtestimoni->getProfesiTesti();

        $this->load->view('dashboard/template/header');
        $this->load->view('dashboard/aksi/Vedittesti', $data);
        $this->load->view('dashboard/template/footer');
    }

    public function aksiEdit($id){
        $wisata = $this->input->post('wisata');
        $profesi = $this->input->post('profesi');
        $user = $this->input->post('user');
        $komentar = $this->input->post('komentar');
        $rating = $this->input->post('rating');
        $last = date('Y-m-d H:i:s');

        $this->Mtestimoni->updateTestimoni($id, $wisata, $profesi, $user, $komentar, $rating, $last);
        redirect(base_url("index.php/Ctestimoni/"));
    }

    public function tambahTestimoni(){
        $data['user'] = $this->Mtestimoni->getUserTesti();
        $data['wisata'] = $this->Mtestimoni->getWisataTesti();
        $data['profesi'] = $this->Mtestimoni->getProfesiTesti();
        

        $this->load->view('dashboard/template/header');
        $this->load->view('dashboard/aksi/Vtambahtesti', $data);
        $this->load->view('dashboard/template/footer');
    }

    public function aksiTambahTesti(){
        $wisata = $this->input->post('wisata');
        $profesi = $this->input->post('profesi');
        $user = $this->input->post('user');
        $komentar = $this->input->post('komentar');
        $rating = $this->input->post('rating');
        $last = date('Y-m-d H:i:s');


        $this->Mtestimoni->insertTestimoni($wisata, $profesi, $user, $komentar, $rating, $last);
        redirect(base_url("index.php/Ctestimoni/"));
    }
}
