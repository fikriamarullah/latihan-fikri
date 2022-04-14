<?php

class Kategori extends CI_Controller{
  public function index(){
        $this->load->database();
        
        $this->load->model('Kategorimodel');
        
        $data['kategori'] =
        $this ->Kategorimodel->tampilKategori();
        $this->load->view('kategori_view',$data);
  }
  public function add_kategori(){
        $this->load->view('add_kategori_view');
  }
  function add_kategori_act(){
        $this->load->database();
        $this->load->model('Kategorimodel');
        
        $tambah = [
            'kategori_judul'   => $this->input->post('kategori_judul'),
            'kategori_isi'     => $this->input->post('kategori_isi'),
            'kategori_penulis' => $this->input->post('kategori_penulis'),

        ];

        $this->Kategorimodel->add_kategori($tambah);
        redirect('Kategori'); 
     }
     public function delete($id){
        $this->load->database();

        $this->db->where('kategori_id', $id);
        $this->db->delete('tbl_kategori');
        
        redirect('kategori');
     }
  }
?>




























