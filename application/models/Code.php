<?php  
    class Code extends CI_Model{
        public function select_code_by_num($numero){
            $query = sprintf("SELECT * from code where numero = '%s'", $numero);
            $query =  $this->db->query($query);
            $result = $query->result_array();
            if($result==null){
                return null;
            }
            return $query -> row();
        }

        public function entrerCode($numero, $idUser){
            $code = $this -> select_code_by_num($numero);
            if($code == null || $code->status == 1){ 
                return false; 
            }
            $query = sprintf("INSERT into validation_code (id_code, id_user, date, valide) values (%d, %d, now(), 0)", $code->id, $idUser);
            $this->db->query($query);
        }


        public function create ($numero, $montant){
            $query = sprintf("INSERT into code (numero, status, montant) values ('%s', 0, %d)", $numero, $montant);
            $this->db->query($query);
        }

        public function get_list_code_non_utilise (){
            $query = $this->db->query("select * from code where status = 0");
            return $query->result_array();
        }


        //  VALIDATION DE CODE
        public function get_list_code_non_valide (){
            $query = $this->db->query("select * from v_validation_code where valide = 0");
            $result = $query->result_array();
            if($result==null){
                return array();
            }
            return $result;    
        }

        public function valider_code($idvalidation, $idcode){
            $query = sprintf("UPDATE validation_code set valide = 1 where id = %d", $idvalidation);
            $this->db->query($query);
            $query = sprintf("UPDATE code set status = 1 where id = %d", $idcode);
            $this->db->query($query);
        }

        public function validation_code($idcode){
            $query = sprintf("SELECT * from v_validation_code where id_code = %d", $idcode);
            $query = $this->db->query($query);
            $row = $query -> row();

            // valider code
            $this->valider_code($row->id_validation, $idcode);

            // update monnaie
            $monnaie = $row->monnaie + $row->montant;
            $sql = sprintf("UPDATE details set monnaie = %d where idutilisateur = %d", $monnaie, $row->id);
            $this->db->query($sql);
        }

        // //  REFUSER
        // function refuser ($id){
        //     $query = sprintf("UPDATE validation_code set valide = -1 where id = %d", $id);
        //     $this->db->query($query);
        // }
    }

