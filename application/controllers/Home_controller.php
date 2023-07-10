<?php

class Home_controller extends CI_Controller {

    public function index($error=''){
        $data['sess'] = $this->session->userdata('userid');
        $this->load->view("header");
        $this->load->view("home",$data);
    }


    
}