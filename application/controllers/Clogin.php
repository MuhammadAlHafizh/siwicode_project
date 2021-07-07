<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {
	function __construct(){

		parent::__construct();
		$this->load->model('Mlogin');
	}

	public function index()
	{
		$this->load->view('login/Vlogin.php');
	}

	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$last_login = date('Y-m-d H:i:s');
		
		
		$hasil_login = array(
			'username' => $username,
			'password' => $password
		);

		$cek = $this->Mlogin->cek_login("user", $hasil_login)->num_rows();
		if( $cek > 0){
			$data_admin = $this->Mlogin->getRowAdmin($username);
			$role = $data_admin->role;
			$isi_lastlogin = $this->Mlogin->UpdateLastLogin($username, $last_login);


			$data_session = array(
				'id' => $data_admin->id,
				'nama' => $username,
				'role' => $role,
				'status' => "login"
			);
			
			$this->session->set_userdata($data_session);
			if ($this->session->userdata('role') == 'admin'){
				redirect(base_url("index.php/Cadmin/"));
			}
			else {
				redirect(base_url("index.php/Clandingpage/"));
			}
			
		}

		else{
			$this->session->set_flashdata('fail', 'username atau email tidak ditemukan');
			redirect(base_url("index.php/Clogin/"));
		}
	}


	
}
