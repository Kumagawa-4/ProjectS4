<?php  
    class User extends CI_Model{
        public function get_list_code_non_valide (){
            $query = $this->db->query("select * from code where status = 0");
            $result = $query->result_array();
            if($result==null){
                return array();
            }
            return $result;    
        }

        public function validation_code($idcode){
            $query = $this->db->query("UPDATE code set status = 1");
            $this->db->query($sql);
        }
    }