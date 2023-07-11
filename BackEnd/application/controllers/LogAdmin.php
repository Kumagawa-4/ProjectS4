<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogAdmin extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }
  
    public function index(){
        redirect('index.php/LogAdmin/login');
    }

    public function login(){
        $this->load->view('Login.php');
    }

    public function verifyLogin(){
        $nom = $this->input->post('nom');
        $pass = $this->input->post('pass');
        $check = $this->User->loginAdmin($nom,$pass);
        if($check === false){
            redirect('index.php/LogAdmin/login');
        }else{
            $session = $check;
            session_start();
            $_SESSION['userid'] = $session;
            redirect('index.php/AdminController');
        }
    }

    public function logout(){
        session_destroy();
        redirect('index.php/LogAdmin/login');
    }

}
