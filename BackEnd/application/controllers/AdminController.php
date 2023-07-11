<?php

class AdminController extends CI_Controller {

    public function index($error=''){
        $data['regime'] = $this->Regime->getAllRegimeRead($this->Regime->getAllRegime());
        $data['plat'] = $this->Regime->getAllPlat();
        $data['activity'] = $this->Regime->getAllActivityType();
        $data2['user'] = $this->User->getUserById($_SESSION['userid']);
        $this->load->view("headerAdmin",$data2);
        $this->load->view("home",$data);
    }

    public function detailsDisplay(){
        $id = $this->input->get('id');
        $data['regime'] = $this->Regime->getFullRegime($this->Regime->getByIdRegime($id));
        $data['menu'] =$this->Regime->getAllMenu($id);
        $data['activity'] = $this->Regime->getAllActivity($id);
        $this->load->view("headerAdmin");
        $this->load->view("detailsRegime",$data);
    }

    public function modifDisplayRegime(){
        $id = $this->input->get('id');
        $data['regime'] = $this->Regime->getByIdRegime($id);
        $data['menu'] =$this->Regime->getAllMenu($id);
        $data['activity'] = $this->Regime->getAllActivity($id);
        $data2['id'] = $this->User->getUserById($_SESSION['userid']);
        $this->load->view("headerAdmin",$data2);
        $this->load->view("modifRegime",$data);
    }

    public function modifRegime(){
        $idRegime = $this->input->post('idRegime');
        $duree = $this->input->post('duree');
        $poids = $this->input->post('poids');
        $paj = $this->input->post('paj');
        $typeRegime = $this->input->post('typeRegime');
        $this->Regime->updateRegime($idRegime,$duree,$typeRegime,$poids,$paj);
        $data['id'] = $idRegime;
        $query_string = http_build_query($data);
        redirect('index.php/AdminController/modifDisplayRegime?'.$query_string);
    }

    public function addDisplayRegime(){
        $data2['id'] = $this->User->getUserById($_SESSION['userid']);
        $this->load->view("headerAdmin",$data2);
        $this->load->view("addRegime");
    }
    public function addRegime(){
        $duree = $this->input->post('duree');
        $poids = $this->input->post('poids');
        $paj = $this->input->post('paj');
        $typeRegime = $this->input->post('typeRegime');
        $this->Regime->addRegime($duree,$typeRegime,$poids,$paj);
        redirect('index.php/AdminController/');
    }

    public function deleteRegime(){
        $id = $this->input->get('id');
        $this->Regime->deleteRegime($id);
        redirect('index.php/AdminController/');
    }

    // CRUD plat------------------------------------

    public function modifDisplayPlat(){
        $id = $this->input->get('id');
        $data['plat'] = $this->Regime->getByIdPlat($id);
        $data2['id'] = $this->User->getUserById($_SESSION['userid']);
        $this->load->view("headerAdmin",$data2);
        $this->load->view("modifPlat",$data);
    }

    public function modifPlat(){
        $nom = $this->input->post('nom');
        $prix = $this->input->post('prix');
        $id = $this->input->post('id');
        $this->Regime->updatePlat($nom,$prix,$id);
        redirect('index.php/AdminController/');
    }

    public function addDisplayPlat(){
        $data2['id'] = $this->User->getUserById($_SESSION['userid']);
        $this->load->view("headerAdmin",$data2);
        $this->load->view("addPlat");
    }
    public function addPlat(){
        $nom = $this->input->post('nom');
        $prix = $this->input->post('prix');
        $this->Regime->addPlat($nom,$prix);
        redirect('index.php/AdminController/');
    }

    public function deletePlat(){
        $id = $this->input->get('id');
        $this->Regime->deletePlat($id);
        redirect('index.php/AdminController/');
    }

    // ------------------------------
    // CRUD Activity--------------------------

    public function modifDisplayActivity(){
        $id = $this->input->get('id');
        $data['activity'] = $this->Regime->getByIdActivity($id);
        $data2['id'] = $this->User->getUserById($_SESSION['userid']);
        $this->load->view("headerAdmin",$data2);
        $this->load->view("modifActivity",$data);
    }
    public function modifActivity(){
        $id = $this->input->post('id');
        $nom = $this->input->post('nom');
        $this->Regime->updateActivity($nom,$id);
        redirect('index.php/AdminController/');
    }

    public function addDisplayActivity(){
        $data2['id'] = $this->User->getUserById($_SESSION['userid']);
        $this->load->view("headerAdmin",$data2);
        $this->load->view("addActivity");
    }
    public function addActivity(){
        $nom = $this->input->post('nom');
        $this->Regime->addActivity($nom);
        redirect('index.php/AdminController/');
    }

    public function deleteActivity(){
        $id = $this->input->get('id');
        $this->Regime->deleteActivity($id);
        redirect('index.php/AdminController/');
    }

    // ------------------------------------
    // CRUD menu
    public function modifDisplayMenu(){
        $id = $this->input->get('idRegime');
        $data['error'] = $this->input->get('error');
           
        if(count($this->Regime->getAllMenu($id))==0){
            $this->Regime->addMenu(1,40,$id);
            $this->Regime->addMenu(2,30,$id);
            $this->Regime->addMenu(3,30,$id);
        }
        
        $data['menu'] = $this->Regime->getAllMenu($id);
        $data['idRegime'] = $id;
        $data2['id'] = $this->User->getUserById($_SESSION['userid']);
        $this->load->view("headerAdmin",$data2);
        $this->load->view("modifMenu",$data);
    }
    public function modifMenu(){
        $idRegime = $this->input->post('idRegime');
        $frequence1 = $this->input->post('frequence1');
        $frequence2 = $this->input->post('frequence2');
        $frequence3 = $this->input->post('frequence3');

        if($frequence1+$frequence2+$frequence3 !=100){
            $data['error'] = "La somme des valeurs doit etre 100%";
            $data['idRegime'] = $idRegime;
            $query_string = http_build_query($data);
            redirect('index.php/AdminController/modifDisplayMenu?'.$query_string);
        }

        $allMenu = $this->Regime->getAllMenu($idRegime);
        $this->Regime->updateMenu($allMenu[0]['idPlat'],$frequence1,$idRegime,$allMenu[0]['id']);
        $this->Regime->updateMenu($allMenu[1]['idPlat'],$frequence2,$idRegime,$allMenu[1]['id']);
        $this->Regime->updateMenu($allMenu[2]['idPlat'],$frequence3,$idRegime,$allMenu[2]['id']);
        $data['id'] = $idRegime;
        $query_string = http_build_query($data);
        redirect('index.php/AdminController/modifDisplayRegime?'.$query_string);
    }

    public function addDisplayMenu(){
        $data['idRegime'] = $this->input->get('idRegime');
        $data['plat'] = $this->Regime->getAllPlat();
        $data2['id'] = $this->User->getUserById($_SESSION['userid']);
        $this->load->view("headerAdmin",$data2);
        $this->load->view("addMenu",$data);
    }
    public function addMenu(){
        $idRegime = $this->input->post('idRegime');
        $idPlat = $this->input->post('idPlat');
        $frequence = $this->input->post('frequence');
        $this->Regime->addMenu($idPlat,$frequence,$idRegime);
        $data['id'] = $idRegime;
        $query_string = http_build_query($data);
        redirect('index.php/AdminController/modifDisplayRegime?'.$query_string);
    }

    public function deleteMenu(){
        $id = $this->input->get('id');
        $idRegime = $this->input->get('idRegime');
        $this->Regime->deleteMenu($id);
        $data['id'] = $idRegime;
        $query_string = http_build_query($data);
        redirect('index.php/AdminController/modifDisplayRegime?'.$query_string);
    }

    // ------------------------------------------


    public function modifDisplayDetailsActivites(){
        $id = $this->input->get('id');
        $data['detailsActivites'] = $this->Regime->getByIdDetailsActivites($id);
        $data['activite'] = $this->Regime->getAllActivityType();
        $data2['id'] = $this->User->getUserById($_SESSION['userid']);
        $this->load->view("headerAdmin",$data2);
        $this->load->view("modifDetailsActivites",$data);
    }
    public function modifDetailsActivites(){
        $id = $this->input->post('id');
        $idRegime = $this->input->post('idRegime');
        $idActivite = $this->input->post('idActivite');
        $frequence = $this->input->post('frequence');
        $periode = $this->input->post('periode');
        $this->Regime->updateDetailsActivites($idActivite,$frequence,$periode,$idRegime,$id);
        $data['id'] = $idRegime;
        $query_string = http_build_query($data);
        redirect('index.php/AdminController/modifDisplayRegime?'.$query_string);
    }

    public function addDisplayDetailsActivites(){
        $data['idRegime'] = $this->input->get('idRegime');
        $data['activite'] = $this->Regime->getAllActivityType();
        $data2['id'] = $this->User->getUserById($_SESSION['userid']);
        $this->load->view("headerAdmin",$data2);
        $this->load->view("addDetailsActivites",$data);
    }
    public function addDetailsActivites(){
        $idRegime = $this->input->post('idRegime');
        $idActivite = $this->input->post('idActivite');
        $frequence = $this->input->post('frequence');
        $periode = $this->input->post('periode');
        $this->Regime->addDetailsActivites($idActivite,$frequence,$periode,$idRegime);
        $data['id'] = $idRegime;
        $query_string = http_build_query($data);
        redirect('index.php/AdminController/modifDisplayRegime?'.$query_string);
    }

    public function deleteDetailsActivites(){
        $id = $this->input->get('id');
        $idRegime = $this->input->get('idRegime');
        $this->Regime->deleteDetailsActivites($id);
        $data['id'] = $idRegime;
        $query_string = http_build_query($data);
        redirect('index.php/AdminController/modifDisplayRegime?'.$query_string);
    }


    
}