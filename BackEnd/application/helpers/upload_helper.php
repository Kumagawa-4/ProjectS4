<?php

	function upload($file,$dossier,$extensions){
        // $dossier = '../assets/img/upload/';
        $fichier = basename($file['name']);
        $taille_maxi = 2000000;
        $taille = filesize($file['tmp_name']);
        // $extensions = array('.png', '.gif', '.jpg', '.jpeg','.PNG');
        $extension = strrchr($file['name'], '.');
        //Début des vérifications de sécurité...
        if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
        {
        $erreur = 'mauvais type de fichier';
        }
        if($taille>$taille_maxi)
        {
        $erreur = 'Le fichier est trop gros...';
        }
        if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
        {
        //On formate le nom du fichier ici...
        $fichier = strtr($fichier,
        'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
        'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
        //On remplace ceux qui ont un accent, par les lettres qui n'ont pas
        $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
            if(move_uploaded_file($file['tmp_name'], $dossier .'/'. $fichier))
            {
                return $fichier;
            }else{
                echo "upload tsy mety";
            }
        }
        else{
            echo $erreur;
        }

    }

?>