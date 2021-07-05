<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cregister extends CI_Controller {
	function __construct(){

		parent::__construct();
		$this->load->model('Mregister');
	}

	public function index()
	{
		$this->load->view('login/Vregister.php');
	}

    public function cekRegister(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $created_at = date('Y-m-d H:i:s');

        $data = $this->Mregister->ambilData();
        $cek = 0;

        foreach($data->result() as $data){
            $d_usrname = $data->username;
            $d_email = $data->email;

            if($d_usrname == $username && $d_email == $email){
                $cek = 1;
            }
            else{
                $cek = 0;
            }
        };

        if($cek == 0){
            $this->session->set_flashdata('success', 'berhasil melakukan register');
            $insert = $this->Mregister->tambahData($username, $email, $password, $created_at);
            redirect(base_url("index.php/Cregister/"));

            
        }
        else{
            $this->session->set_flashdata('fail', 'username atau email telah terpakai');
            //cari username yang lain
            redirect(base_url("index.php/Cregister/"));
        }

    }

	
}
