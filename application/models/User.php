<?php  
    class User extends CI_Model{
        public function login($nom,$pass){
            $query = "SELECT * from utilisateur where nom= %s and pass= %s";
            $query = sprintf($query, $this->db->escape($nom), $this->db->escape($pass));
            $query = $this->db->query($query);
            if ($query->num_rows() == 1) {
                $row = $query->row();
                return $row->id;
            } else {
                return false;
            }
        }
    }
?>