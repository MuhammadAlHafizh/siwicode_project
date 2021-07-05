<?php 

class Mlandingpage extends CI_Model{
    
    public function getWisata()
    {
        //buat query
        $query = $this->db->get('wisata');
        return $query;
    }


}



?>