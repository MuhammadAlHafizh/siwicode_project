<?php
defined('BASEPATH') OR exit('Nodirectscriptaccessallowed');

class Cadmin extends CI_Controller {
    function __construct(){

		parent::__construct();
		$this->load->model('Madmin');
	}

    public function index() {
        $data['admin'] = $this->Madmin->getAdmin(); //mengambil data

        $this->load->view('dashboard/template/header');
        $this->load->view('dashboard/Vadmin', $data);
        $this->load->view('dashboard/template/footer');
    }

    public function pengunjung() {
        $data['pengunjung'] = $this->Madmin->getPengunjung(); //mengambil data

        $this->load->view('dashboard/template/header');
        $this->load->view('dashboard/Vpengunjung', $data);
        $this->load->view('dashboard/template/footer');
    }

    public function editAdmin($id) {
        $data['admin'] = $this->Madmin->findAdmin($id); //mengambil satu data

        $this->load->view('dashboard/template/header');
        $this->load->view('dashboard/aksi/Vedit', $data);
        $this->load->view('dashboard/template/footer');
    }

    public function tambahAdmin($role){

        $data['role'] = $role;

        $this->load->view('dashboard/template/header');
        $this->load->view('dashboard/aksi/Vtambah', $data);
        $this->load->view('dashboard/template/footer');
    }

    public function aksiTambah($role){
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $created_at = date('Y-m-d H:i:s');

        $data = $this->Madmin->getAdmin();
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
            $this->session->set_flashdata('success', 'berhasil menambah data');
            $insert = $this->Madmin->tambahAdmin($username, $password, $email, $created_at, $role);
            if($role == 'admin'){
                redirect(base_url("index.php/Cadmin/"));
            }
            else{
                redirect(base_url("index.php/Cadmin/pengunjung"));
            }
            

            
        }
        else{
            $this->session->set_flashdata('fail', 'username atau email telah terpakai');
            //cari username yang lain
            redirect("#");
        }
    }

    public function aksiEdit($id, $role) {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $passsword = $this->input->post('password');

        $this->Madmin->updateAdmin($id, $username, $passsword, $email);
        if($role == 'admin'){
            if($this->session->userdata('id') == $id){
                $data_session = array(
                    'id' == $id,
                    'nama' => $username,
                    'role' => $role,
                    'status' => "login"
                );
                
                $this->session->set_userdata($data_session);
    
                redirect(base_url("index.php/Cadmin/"));
            }

            else {
                redirect(base_url("index.php/Cadmin/"));
            }
        }
        else{
            redirect(base_url("index.php/Cadmin/pengunjung"));
        }
        
    }

    public function aksiHapus($id, $role) {
        $this->Madmin->hapusData($id);
        if($role == 'admin'){
            redirect(base_url("index.php/Cadmin/"));
        }
        else {
            redirect(base_url("index.php/Cadmin/pengunjung/"));
        }
    }

    public function logout(){
		$this->session->sess_destroy();
		redirect(base_url("index.php/Clogin/"));
	}


}