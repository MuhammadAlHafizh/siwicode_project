<?php

class Mlogin extends CI_Model
{
    public function cek_login($tabel, $hasil){
        return $this->db->get_where($tabel, $hasil);
    }


    public function getRowAdmin($username){
        $query = $this->db->get_where('user', ['username' => $username]);
        return $query->row();
    }

    public function updateLastLogin($username, $lastlogin){
        $this->db->where('username', $username);
        $this->db->update('user', ["last_login" => $lastlogin]);
    }

}