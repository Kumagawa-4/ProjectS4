<?php

class Home_controller extends CI_Controller {

    public function index($error=''){
        //$data['sess'] = $this->session->userdata('userid');
        $data['sess'] = $_SESSION['idUser'];
        $data['user'] = $this->User->getUserById( $_SESSION['idUser']);
        $this->load->view("header", $data);
        $this->load->view("accueil",$data);
    }


    
}