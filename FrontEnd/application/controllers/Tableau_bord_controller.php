<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tableau_bord_controller extends CI_Controller{

    
    public function index() {
        // Effectuer une requête SELECT pour récupérer les données enregistrées
    
        // Appeler la fonction qui obtient les statistiques depuis le modèle
        $statistiques = $this->obtenirStatistiques();
        $produit = $this->getRegimes();
        
        // Effectuer une requête SELECT pour récupérer les données de la table "historique"
        $query = $this->db->get('historique');
        $results = $query->result();
    
        // Préparer les tableaux pour les labels (dates) et les données (montants)
        $labels = array();
        $date = array();
    
        // Parcourir les résultats de la requête et remplir les tableaux
        foreach ($results as $row) {
            $labels[] = $row->date_du_jour;
            $date[] = $row->Montant;
        }
        // Charger la vue de confirmation avec les données récupérées et les statistiques
        $data['statistiques'] = $statistiques;
        $data['produit'] = $produit;
        $data['labels'] = json_encode($labels);
        $data['date'] = json_encode($date);
        $this->load->view('dashboard ', $data);
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
        


}


