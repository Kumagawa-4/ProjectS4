
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Completion extends CI_Controller {

    public function index() {
        $idUser = $_SESSION['idUser'];
        $dataHeader['user'] = $this->User->getUserById($idUser);
        $this->load->view('header.php', $dataHeader);
        $this->load->view('completion_form');
        
    }

    public function process_form() {
        // Récupérer les données du formulaire
        $age = $this->input->post('bmi[age]');
        $height = $this->input->post('bmi[height]');
        $weight = $this->input->post('bmi[weight]');
        if ($this->input->post('goal') =="Augmenter Poid") {
            $goal = 1;
        } elseif($this->input->post('goal') == 'Diminuer Poid') {
            $goal = 2;
        }
        if ($this->input->post('customRadio') === 'customRadio1') {
            // La case "Homme" est sélectionnée
            $genre = 1;
        } else{
            // La case "Femme" est sélectionnée
            $genre = 2;
        } 
        // insertion dans la table details
        $details = array(
            'idUtilisateur' =>  $_SESSION['idUser'], 
            'idgenre' => $genre,
            'taille' => $height,
            'poids' => $weight,
            'monnaie' => 0, 
            'objectif' => $goal
        );
        $this->db->insert('details', $details);
    
       // Appeler la fonction de confirmation pour afficher les détails enregistrés
        // $this->confirmation();
        redirect('Regime_controller/accueil');
    }

}
?>
