<?php

    class Kategorimodel extends CI_Model{
   
        function tampilkategori(){
         return $this->db->get ('tbl_kategori')->result_array();
        }
        public function add_kategori($tambah){
         return $this->db->insert('tbl_kategori', $tambah);
    }
    public function insertkategori($data){
        $this->db->insert('kategori',$data);
        return $this->db->insert_id();

    }
 }
?>