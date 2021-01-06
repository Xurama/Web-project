<?php
    require "../includes/PDO.php";

    //ajoute les scènes dans la table scene via un fichier texte

    $fichier = file('../fichiers/Scene.txt');

    //prépare la requête
    $stmt = $db->prepare('INSERT INTO scene VALUES (:id,:SceneNom)');
    //parcourir ligne par ligne
    foreach ($fichier as $ligne){
        //enlève les caractères invisbiles \r, \n, \t, etc...
        $ligne = trim($ligne);
        //découper la ligne en deux vu qu'il n'y a que 2 variables
        list($id,$SceneNom) = explode(";", $ligne);

        //insérer les deux valeurs dans la base
        $stmt->execute(array(':id'=>$id,':SceneNom'=>$SceneNom));
    }


    //ajoute les départements dans la table departement via un fichier texte

    $fichier = file('../fichiers/Departement.txt');

    //prépare la requête
    $stmt = $db->prepare('INSERT INTO departement VALUES (:id,:NumRegion,:NomRegion)');
    //parcourir ligne par ligne
    foreach ($fichier as $ligne){
        //enlève les caractères invisbiles \r, \n, \t, etc...
        $ligne = trim($ligne);
        //cela permet de découper la ligne en trois à cause des trois variables
        list($id,$NumRegion,$NomRegion) = explode(";", $ligne);

        //cela insere les trois valeurs dans la base
        $stmt->execute(array(':id'=>$id,':NumRegion'=>$NumRegion,':NomRegion'=>$NomRegion));
    }

    //ajout d'un utilisateur administrateur dans la table utilisateur via un fichier texte
    
    $fichier = file('../fichiers/Administrateur.txt');

    // ici on prépare la requête
    $stmt = $db->prepare('INSERT INTO utilisateur VALUES (:Nom,:Email,:Motdepasse,:`type`)');

    //parcourir ligne par ligne
    foreach ($fichier as $ligne){
        //enlève les caractères invisbiles \r, \n, \t, etc...
        $ligne = trim($ligne);
        //cela permet de découper la ligne pour chaque valeurs soit quatre fois
        list($nom,$email,$mdp,$type) = explode(";", $ligne);

        //cela insere les quatres valeurs dans la base avec le mot de passe qui est modifié
        $stmt->execute(array(':Nom'=>$nom,':Email'=>$email,':Motdepasse'=>password_hash($mdp),':type'=>$type));
    }
    
    
    
   
    
