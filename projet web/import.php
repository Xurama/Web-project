<?php
    require "../includes/PDO.php";


    $fichier = file('../fichiers/Scene.txt');

    //prépare la requête
    $stmt = $db->prepare('INSERT INTO scene VALUES (:id,:SceneNom)');
    //parcourir ligne par ligne
    foreach ($fichier as $ligne){
        //enlève les caractères invisbiles \r, \n, \t, etc...
        $ligne = trim($ligne);
        //découper la ligne en deux
        list($id,$SceneNom) = explode(";", $ligne);

        //insérer les deux valeurs dans la base
        $stmt->execute(array(':id'=>$id,':SceneNom'=>$SceneNom));
    }


    $fichier = file('../fichiers/Departement.txt');

    //prépare la requête
    $stmt = $db->prepare('INSERT INTO departement VALUES (:id,:NumRegion,:NomRegion)');
    //parcourir ligne par ligne
    foreach ($fichier as $ligne){
        //enlève les caractères invisbiles \r, \n, \t, etc...
        $ligne = trim($ligne);
        //découper la ligne en deux
        list($id,$NumRegion,$NomRegion) = explode(";", $ligne);

        //insérer les deux valeurs dans la base
        $stmt->execute(array(':id'=>$id,':NumRegion'=>$NumRegion,':NomRegion'=>$NomRegion));
    }