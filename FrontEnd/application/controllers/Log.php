<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }
  
    public function index(){
        redirect('index.php/Log/login');
    }

    public function login(){
        $this->load->view('Login.php');
    }

    public function verifyLogin(){
        $nom = $this->input->post('nom');
        $pass = $this->input->post('pass');
        $check = $this->User->login($nom,$pass);
        if($check === false){
            redirect('index.php/Welcome');
        }else{
            $session = $check;
            $this->session->set_userdata('userid',$session);
            redirect('index.php/Home_controller');
        }
    }

    public function logout(){
        $this->session->unset_userdata('userid');
        redirect('index.php/Log/login');
    }

    public function inscription_index (){
        $this->load->view('Inscription.php');
    }

    public function inscription (){
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $mdp = $this->input->post('pass');
        $email = $this->input->post('email');
        $admin = 0;
        if($this->input->post('isAdmin')){
            $admin = 1;
        }
        $check = $this->User->newUser($nom, $prenom, $email, $mdp, $admin);
        if($check === false){
            redirect('index.php/Welcome');
        }else{
            $session = $check;
            $this->session->set_userdata('userid',$session);
            redirect('index.php/Home_controller');
        }
    }
}
