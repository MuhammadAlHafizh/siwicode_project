<?php 

class Mdeskripsi extends CI_Model{
    
    public function getWisataID($id)
    {
        $query = $this->db->get_where('wisata', ['id' => $id]);
        return $query->row();
    }

    public function getTestimoni(){
        return $this->db->get('testimoni');
    }

    public function getTesti($id){
        $query = $this->db->get_where('testimoni', ['wisata_id' => $id]);
        return $query->row();
    }

    public function getUserTesti($id){
        $query = $this->db->get_where('user', ['id' => $id]);
        return $query->row();
    }

    public function getProfesiTesti($id){
        $query = $this->db->get_where('profesi', ['id' => $id]);
        return $query->row();
    }


}



?>