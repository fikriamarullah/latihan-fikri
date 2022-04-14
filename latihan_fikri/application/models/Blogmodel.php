<?php
    class Blogmodel extends CI_Model{
    function tampilBlog(){
        //return $this->db->get('tbl_blog')->result_array(); //querry menampilkan semua data
       
        return $this->db->query('select * from tbl_blog')->result_array();
    }
    public function add_blog($tambah){
        return $this->db->insert('tbl_blog',$tambah);

    }
}
?>