<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code_controller extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        redirect('index.php/Code_controller/listCode');
    }

    public function entrerCode_index($error = ''){
        $data['codes'] = $this->Code->get_list_code_non_utilise();
        $data['error'] = $error;
        $this->load->view('header.php');
        $this->load->view('entrer_code.php', $data);
    }

    public function entrerCode(){
        $error = '';
        $num = $this->input->post('num');
        
        if($this->Code->entrerCode($num) === false){
            $error = 'Code invalid';
        }
        redirect('Code_controller/entrerCode_index/'. $error);
    }

    public function listCode (){
        $listCode = $this->Code->get_list_code_non_valide();
        $data['codes'] = $listCode;
        $msg = '';
        if(count($listCode)==0){
            $msg = 'Pas de code à valider pour l\'instant';
        }
        $data['msg'] = $msg;
        
        $this->load->view('Liste_code.php', $data);
    }

    public function valider($id){
        $this->Code->validation_code($id);
        redirect('index.php/Code_controller/listCode');
    }

    function refuser($id){
        $this->Code->refuser($id);
        redirect('index.php/Code_controller/listCode');
    }
}