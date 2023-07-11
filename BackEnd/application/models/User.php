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

        public function loginAdmin($nom,$pass){
            $query = "SELECT * from utilisateur where nom= %s and mdp= %s and is_admin=0";
            $query = sprintf($query, $this->db->escape($nom), $this->db->escape($pass));
            $query = $this->db->query($query);
            if ($query->num_rows() == 1) {
                $row = $query->row();
                return $row->id;
            } else {
                return false;
            }
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
    }
?>