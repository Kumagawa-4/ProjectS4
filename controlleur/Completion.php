
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Completion extends CI_Controller {

    public function index() {
        
        $this->load->helper('form'); // Charger le helper 'form'
        $this->load->model('Stat');

        $this->load->view('completion_form');
        
    }

    public function process_form() {
        // Récupérer les données du formulaire
        $age = $this->input->post('bmi[age]');
        $height = $this->input->post('bmi[height]');
        $weight = $this->input->post('bmi[weight]');
        if ($this->input->post('goal') =="Augmenter Poid") {
            // La case "Homme" est sélectionnée
            $goal = 1;
        } elseif ($this->input->post('goal') == 'Diminuer Poid') {
            // La case "Femme" est sélectionnée
            $goal = 2;
        }
        $genre = $this->input->post('bmi[weight]');

        if ($this->input->post('customRadio') === 'customRadio1') {
            // La case "Homme" est sélectionnée
            $genre = 1;
        } elseif ($this->input->post('customRadio') === 'customRadio2') {
            // La case "Femme" est sélectionnée
            $genre = 2;
        } 
                // Insérer les données dans la table details
        $data = array(
            'idUtilisateur' => $this->session->userdata('user_id'), // ID de l'utilisateur à insérer (vous devez ajuster cela en fonction de votre logique)
            'idObjectif' => $goal
        );
        $this->db->insert('objectif_utilisateur', $data);
    
       // Appeler la fonction de confirmation pour afficher les détails enregistrés
       $this->confirmation();
    }
    public function obtenirStatistiques() {
        $statistiques = array();

        $this->db->from('details');
        $nombreUtilisateurs = $this->db->count_all_results();
        $statistiques['nombre_utilisateurs'] = $nombreUtilisateurs;
   
        

        // Récupérer le montant total des activités depuis la table code
        $this->db->select_sum('montant');
        $this->db->where('status', 1); // Filtrer les codes avec un statut de 1
        $this->db->from('code');
        $query = $this->db->get();
        $result = $query->row();
        $montantTotalActivites = $result->montant;
        $statistiques['chiffre_d'] = $montantTotalActivites;

        return $statistiques;
    }
    public function getRegimes() {
        $regimes = array();
    
        // Effectuer la requête SELECT pour récupérer les informations
        $query = $this->db->get('regime');
        $results = $query->result_array();
    
        // Parcourir les résultats et les ajouter au tableau $regimes
        foreach ($results as $row) {
            $regime = array(
                'id' => $row['id'],
                'duree' => $row['duree'],
                'typeRegime' => $row['typeRegime'],
                'poids' => $row['poids']
            );
    
            $regimes[] = $regime;
        }
    
        return $regimes;
    }
    
    
    public function confirmation() {
        // Effectuer une requête SELECT pour récupérer les données enregistrées
    
        // Appeler la fonction qui obtient les statistiques depuis le modèle
        $this->load->model('Stat');
        $statistiques = $this->obtenirStatistiques();
        $produit = $this->getRegimes();
        
        // Charger la vue de confirmation avec les données récupérées et les statistiques
        $data['statistiques'] = $statistiques;
        $data['produit'] =   $produit ;
        $this->load->view('dashboard ', $data);
    }
    
}
?>
