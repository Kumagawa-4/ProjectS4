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


        public function newUser($nom, $prenom, $email, $mdp, $isAdmin){
            $query = "INSERT INTO utilisateur (nom, prenom, email, mdp, is_admin) VALUES(%s, %s, %s, %s, %d)";
            $query = sprintf($query, $this->db->escape($nom), $this->db->escape($prenom), $this->db->escape($email), $this->db->escape($mdp), $isAdmin);
            $this->db->query($query);
            return $this->login($nom, $pass);
        }
    }
?>