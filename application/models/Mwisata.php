<?php

class Mwisata extends CI_Model
{
    public function getWisataAdmin()
    {
        //buat query
        $query = $this->db->get('wisata');
        return $query;
    }

    public function hapusDataWisata($id){
        $this->db->where('id', $id);
        $this->db->delete('wisata');
    }

    public function findWisata($id) {
        $query = $this->db->get_where('wisata', ['id' => $id]);
        return $query->row();
    }

    public function updateWisata($id, $nama, $deskripsi, $alamat, $email, $web){
        $this->db->where('id', $id);
        $this->db->update('wisata', ["nama" => $nama, "deskripsi" => $deskripsi, "alamat" => $alamat, "email" => $email, "web" => $web]);
    }

    public function getJenisWisata(){
        //buat query
        $query = $this->db->get('jenis_wisata');
        return $query;
    }

    public function getJenisKuliner(){
       //buat query
       $query = $this->db->get('jenis_kuliner');
       return $query;
    }

    public function tambahWisata($nama, $deskripsi, $email, $alamat, $web, $idJK, $idJW){
        $data = array(
            'nama' => $nama,
            'email' => $email,
            'deskripsi' => $deskripsi,
            'web' => $web,
            'alamat' => $alamat,
            'jenis_kuliner_id' => $idJK,
            'jenis_wisata_id' => $idJW
        );

        $query = $this->db->insert('wisata', $data);
    }


}