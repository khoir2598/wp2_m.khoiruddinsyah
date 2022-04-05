<?php

class web extends CI_Controller
{
    function __construct()
    {
        parent ::__construct();
    }
    
    public function index()
    {
        $data['judul'] ="halaman depan";
        $this->load->view('v_header');
        $this->load->view('v_index'); 
        $this->load->view('v_footer');
    }
}      
  