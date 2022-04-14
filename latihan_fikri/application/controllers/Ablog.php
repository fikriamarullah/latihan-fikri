<?php

class Ablog extends CI_Controller
{
  public function index(){
        $this->load->database();
        $this->load->model('Blogmodel');
        $data['Ablog'] = $this -> Blogmodel->tampilBlog();
        $this->load->view('Ablog_view',$data);
  }
  public function add_blog(){
     $this->load->view('add_blog_view');
  }
  function add_blog_act(){
        $this->load->database();
        $this->load->model('Blogmodel');
        
        $tambah = [
            'blog_judul'   => $this->input->post('blog_judul'),
            'blog_content' => $this->input->post('blog_content'),
            'blog_penulis' => $this->input->post('blog_penulis'),
        ];

        $this->Blogmodel->add_blog($tambah);
        redirect('Ablog'); 
     }
  }
?>
