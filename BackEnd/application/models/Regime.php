<?php  
    class Regime extends CI_Model{
        public function getAllPlat(){
            $query   = $this->db->query('SELECT * from plat');
            return $query->result_array();
        }

        public function getAllActivityType()
        {
            $query   = $this->db->query('SELECT * from activites');
            return $query->result_array();
        }

        public function getAllMenu($idRegime){
            $query = sprintf("SELECT plat.nom,plat.prix,round(menu.frequence*regime.poidsAlimentParJ*regime.duree/100)*plat.prix as prixTotal,menu.*
                            FROM menu
                            JOIN plat on menu.idPlat = plat.id
                            JOIN regime on menu.idRegime = regime.id where idRegime = %d",$idRegime);
            $query = $this->db->query($query);
            return $query->result_array();
        }

        public function getAllActivity($idRegime){
            $query = sprintf("SELECT activites.nom,da.* FROM detailsActivites as da JOIN activites on da.idActivite = activites.id where idRegime = %d",$idRegime);
            $query = $this->db->query($query);
            return $query->result_array();
        }

        public function getAllRegime(){
            $query   = $this->db->query('SELECT * from regime');
            return $query->result_array();
        }

        public function getAllRegimeRead($array){
            $newArray = array();
            $i = 0;
            foreach($array as $a){
                $newArray[$i]['duree'] = $a['duree'];
                $newArray[$i]['poids'] = $a['poids'];
                $newArray[$i]['poidsAlimentParJ'] = $a['poidsAlimentParJ'];
                $newArray[$i]['id'] = $a['id'];
                if($a['typeRegime'] == 1){
                    $newArray[$i]['typeRegime'] = "Prendre du poids";
                }else{
                    $newArray[$i]['typeRegime'] = "Perdre du poids";
                }
                $i++;
            }
            return $newArray;
        }

        public function getFullRegime($array){
            $newArray = array();
            $newArray['duree'] = $array['duree'];
            $newArray['poids'] = $array['poids'];
            $newArray['poidsAlimentParJ'] = $array['poidsAlimentParJ'];
            $newArray['id'] = $array['id'];
            if($array['typeRegime'] == 1){
                $newArray['typeRegime'] = "Prendre du poids";
            }else{
                $newArray['typeRegime'] = "Perdre du poids";
            }
            return $newArray;
        }

        // get by id
        public function getByIdRegime($id){
            $query = sprintf("SELECT * from regime where id=%d",$id);
            $query = $this->db->query($query);
            return $query->row_array();
        }

        public function getByIdPlat($id){
            $query = sprintf("SELECT * from plat where id=%d",$id);
            $query = $this->db->query($query);
            return $query->row_array();
        }

        public function getByIdActivity($id){
            $query = sprintf("SELECT * from activites where id=%d",$id);
            $query = $this->db->query($query);
            return $query->row_array();
        }

        public function getByIdMenu($id){
            $query = sprintf("SELECT * from menu where id=%d",$id);
            $query = $this->db->query($query);
            return $query->row_array();
        }

        public function getByIdDetailsActivites($id){
            $query = sprintf("SELECT * from DetailsActivites where id=%d",$id);
            $query = $this->db->query($query);
            return $query->row_array();
        }


        // create
        public function addRegime($duree,$typeRegime,$poids,$paj){
            $query = sprintf("INSERT INTO regime (duree,typeRegime,poids,poidsAlimentParJ) VALUES (%d,%d,%d,%d)",$duree,$typeRegime,$poids,$paj);
            $this->db->query($query);
        }

        public function addPlat($nom,$prix){
            $query = sprintf("INSERT INTO plat (nom,prix) VALUES ('%s',%d)",$nom,$prix);
            $this->db->query($query);
        }

        public function addActivity($nom){
            $query = sprintf("INSERT INTO activites (nom) VALUES ('%s')",$nom);
            $this->db->query($query);
        }

        public function addMenu($idPlat,$frequence,$idRegime){
            $query = sprintf("INSERT INTO menu (idPlat,frequence,idRegime) VALUES (%d,%d,%d)",$idPlat,$frequence,$idRegime);
            $this->db->query($query);
        }

        public function addDetailsActivites($idActivite,$frequence,$periode,$idRegime){
            $query = sprintf("INSERT INTO DetailsActivites (idActivite,frequence,periode,idRegime) VALUES (%d,%d,%d,%d)",$idActivite,$frequence,$periode,$idRegime);
            $this->db->query($query);
        }

        // update
        public function updateRegime($id,$duree,$typeRegime,$poids,$paj){
            $query = sprintf("UPDATE regime set duree=%d, typeRegime=%d,poids=%d,poidsAlimentParJ=%d where id=%d",$duree,$typeRegime,$poids,$paj,$id);
            $this->db->query($query);
        }

        public function updatePlat($nom,$prix,$id){
            $query = sprintf("UPDATE plat set nom='%s',prix=%d where id=%d",$nom,$prix,$id);
            echo $query;
            $this->db->query($query);
        }

        public function updateActivity($nom,$id){
            $query = sprintf("UPDATE activites set nom='%s' where id=%d",$nom,$id);
            $this->db->query($query);
        }

        public function updateMenu($idPlat,$frequence,$idRegime,$id){
            $query = sprintf("UPDATE menu set idPlat=%d,frequence=%d,idRegime=%d where id=%d",$idPlat,$frequence,$idRegime,$id);
            $this->db->query($query);
        }

        public function updateDetailsActivites($idActivite,$frequence,$periode,$idRegime,$id){
            $query = sprintf("UPDATE DetailsActivites set idActivite=%d,frequence=%d,periode=%d,idRegime=%d where id=%d",$idActivite,$frequence,$periode,$idRegime,$id);
            $this->db->query($query);
        }

        // delete
        public function deleteRegime($id){
            $query = sprintf("DELETE from regime where id=%d",$id);
            $this->db->query($query);
        }

        public function deletePlat($id){
            $query = sprintf("DELETE from plat where id=%d",$id);
            $this->db->query($query);
        }

        public function deleteActivity($id){
            $query = sprintf("DELETE from activites where id=%d",$id);
            echo $query;
            $this->db->query($query);
        }

        public function deleteMenu($id){
            $query = sprintf("DELETE from menu where id=%d",$id);
            $this->db->query($query);
        }

        public function deleteDetailsActivites($id){
            $query = sprintf("DELETE from DetailsActivites where id=%d",$id);
            $this->db->query($query);
        }
    }
?>