<?php  

class Stat extends CI_Model {
    public function obtenirStatistiques() {
        $statistiques = array();

        // Récupérer le nombre d'utilisateurs
        $this->db->from('utilisateur');
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

?>
