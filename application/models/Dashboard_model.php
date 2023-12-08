<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function konten($limit, $start , $keyword = null){
        if ($keyword) {
           $this->db->like('judul',$keyword);
        }
        $this->db->join('user','konten.username = user.username');
        $this->db->join('kategori','konten.id_kategori = kategori.id_kategori');
        $this->db->order_by('tanggal DESC');
        return $this->db->get('konten', $limit, $start)->result_array();
    }

    public function countAllKonten(){
        return $this->db->get('konten')->num_rows();
    }

}
