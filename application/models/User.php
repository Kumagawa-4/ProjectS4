<?php  
    class User extends CI_Model{
        public function login($nom,$pass){
            $query = "SELECT * from utilisateur where nom= %s and mdp= %s";
            $query = sprintf($query, $this->db->escape($nom), $this->db->escape($pass));
            $query = $this->db->query($query);
            if ($query->num_rows() == 1) {
                $row = $query->row();
                return $row->id;
            } else {
                return false;
            }
        }


        public function newUser($nom, $prenom, $email, $mdp){
            $query = "INSERT INTO utilisateur (nom, prenom, email, mdp, is_admin) VALUES(%s, %s, %s, %s, 0)";
            $query = sprintf($query, $this->db->escape($nom), $this->db->escape($prenom), $this->db->escape($email), $this->db->escape($mdp));
            $this->db->query($query);
            return $this->login($nom, $mdp);
        }


        public function getUserById($id){
            $query = sprintf("SELECT * from utilisateur where id = %d", $id);
            $query = $this->db->query($query);
            $result = $query->result_array();
            if($result==null){
                return Array();
            }
            return $result[0];
        }

        public function haveDetails($idUser){
            $query = sprintf("SELECT * from details where idUtilisateur = %d", $idUser);
            $query = $this->db->query($query);
            if ($query->num_rows() == 1) {
                return true;
            } else {
                return false;
            }
        }
    }
?>