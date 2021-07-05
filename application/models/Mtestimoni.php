<?php

class Mtestimoni extends CI_Model
{
    public function getTestimoniAdmin()
    {
        //buat query
        $this->db->select('*');
        $this->db->from('testimoni'); 
        $this->db->join('jenis_wisata', 'jenis_wisata.id=testimoni.wisata_id');
        $this->db->join('profesi', 'profesi.id=testimoni.profesi_id');
        $this->db->join('user', 'user.id=testimoni.user_id');
        $testimoni = $this->db->get(); 
        return $testimoni;
    }

    public function getUserTesti(){
        $query = $this->db->get('user');
        return $query;
    }

    public function getWisataTesti()
    {
        $query = $this->db->get('wisata');
        return $query;
    }

    public function getProfesiTesti(){
        $query = $this->db->get('profesi');
        return $query;
    }

    public function hapusDataTesti($id){
        $this->db->where('id', $id);
        $this->db->delete('testimoni');
    }

    public function findTestimoni($id) {
        $query = $this->db->get_where('testimoni', ['id' => $id]);
        return $query->row();
    }

    public function updateTestimoni($id, $wisata, $profesi, $user, $komentar, $rating, $last){
        $this->db->where('id', $id);
        $this->db->update('testimoni', ["wisata_id" => $wisata, "profesi_id" => $profesi, "user_id" => $user, "komentar" => $komentar, "rating" => $rating, "last_update" => $last]);
    }

    public function insertTestimoni($wisata, $profesi, $user, $komentar, $rating, $last){
        $data = array(
            "wisata_id" => $wisata, 
            "profesi_id" => $profesi, 
            "user_id" => $user, 
            "komentar" => $komentar, 
            "rating" => $rating, 
            "last_update" => $last
        );

        $query = $this->db->insert('testimoni', $data);
    }


}