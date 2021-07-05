<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cwisata extends CI_Controller {
    function __construct(){

		parent::__construct();
		$this->load->model('Mwisata');
	}

	
	public function index()
	{
		$data['wisata'] = $this->Mwisata->getWisataAdmin(); //mengambil data

        $this->load->view('dashboard/template/header');
        $this->load->view('dashboard/Vwisata', $data);
        $this->load->view('dashboard/template/footer');
	}

    public function aksiHapus($id) {
        $this->Mwisata->hapusDataWisata($id);
        redirect(base_url("index.php/Cwisata/"));

    }

    public function editWisataAdmin($id) {
        $data['wisata'] = $this->Mwisata->findWisata($id); //mengambil satu data

        $this->load->view('dashboard/template/header');
        $this->load->view('dashboard/aksi/Veditwisata', $data);
        $this->load->view('dashboard/template/footer');
    }

    public function aksiEdit($id){
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $deskripsi = $this->input->post('deskripsi');
        $email = $this->input->post('email');
        $web = $this->input->post('web');

        $this->Mwisata->updateWisata($id, $nama, $deskripsi, $alamat, $email, $web);
        redirect(base_url("index.php/Cwisata/"));
    }

    public function tambahWisata(){
        $data["jenis_wisata"] = $this->Mwisata->getJenisWisata();
        $data["jenis_kuliner"] = $this->Mwisata->getJenisKuliner();
        

        $this->load->view('dashboard/template/header');
        $this->load->view('dashboard/aksi/Vtambahwisata', $data);
        $this->load->view('dashboard/template/footer');
    }

    public function aksiTambahWisata(){
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $deskripsi = $this->input->post('deskripsi');
        $email = $this->input->post('email');
        $web = $this->input->post('web');
        $idJK = $this->input->post('jkuliner');
        $idJW = $this->input->post('jwisata');


        $this->Mwisata->tambahWisata($nama, $deskripsi, $email, $alamat, $web, $idJK, $idJW);
        redirect(base_url("index.php/Cwisata/"));
    }
}
