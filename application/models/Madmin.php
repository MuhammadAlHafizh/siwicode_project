<?php 

class Madmin extends CI_Model{
    
    public function getAdmin()
    {
        //buat query
        $query = $this->db->get_where('user', ['role' => 'admin']);
        return $query;
    }

    public function getPengunjung()
    {
        //buat query
        $query = $this->db->get_where('user', ['role' => 'pengunjung']);
        return $query;
    }

    

    public function findAdmin($id){
        $query = $this->db->get_where('user', ['id' => $id]);
        return $query->row();
    }

    public function tambahAdmin($username, $password, $email, $created_at, $role){
        $data = array(
            'username' => $username,
            'email' => $email,
            'role' => $role,
            'password' => $password,
            'created_at' => $created_at
        );

        $query = $this->db->insert('user', $data);
    }

    public function updateAdmin($id, $username, $password, $email){
        $this->db->where('id', $id);
        $this->db->update('user', ["username" => $username, "password" => $password, "email" => $email]);
    }

    public function hapusData($id){
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

}



?>