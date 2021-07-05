<?php

class Mregister extends CI_Model
{
    public function ambilData(){
        return $this->db->get('user');
    }

    public function tambahData($username, $email, $password, $created_at){
        $role = 'pengunjung';
        $data = array(
            'username' => $username,
            'email' => $email,
            'role' => $role,
            'password' => $password,
            'created_at' => $created_at
        );

        $query = $this->db->insert('user', $data);
    }


}