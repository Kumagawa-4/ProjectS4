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
            session_set_cookie_params(86400);
            session_start();
            $_SESSION['idUser'] = $session;
            redirect('index.php/Home_controller');
        }
    }

    public function logout(){
        session_destroy();
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
        $check = $this->User->newUser($nom, $prenom, $email, $mdp);
        if($check === false){
            redirect('index.php/Welcome');
        }else{
            $session = $check;
            session_set_cookie_params(86400);
            session_start();
            $_SESSION['idUser'] = $session;
            redirect('index.php/Home_controller');
        }
    }
}
