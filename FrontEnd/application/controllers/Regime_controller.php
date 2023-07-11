<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code_controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function accueil() {
        // Récupérer l'objectif du formulaire
        $objectif = $this->input->post('goal');
    
        // Obtenir les suggestions de régimes en fonction de l'objectif
        $suggestions = $this->getSuggestionsRegimes($objectif);
    
        // Charger la vue "liste" avec les suggestions de régimes
        redirect('Regime_controller/index/'.$suggestions);
    }

    public function index($regimes = Array(), $error=''){
        $data['suggestions'] = $regimes;
        $data['error'] = $error;
        $idUser = $_SESSION['idUser'];
        $dataHeader['user'] = $this->User->getUserById($idUser);
        $this->load->view('header.php', $dataHeader);
        $this->load->view('accueil', $data);
    }

    public function getSuggestionsRegimes($objectif) {
        $this->db->where('typeRegime', $objectif);
        $query = $this->db->get('regime');
        $suggestions = $query->result_array();
        return $suggestions;
    }

}