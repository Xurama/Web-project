<?php
    //permet de débuter la session pour tous les fichiers, cela ne nous oblige pas à le réécrire à chaque fichier
    session_start();
    require '../includes/smarty/libs/Smarty.class.php'; 
    require "../includes/flight/flight/Flight.php";
    require "../includes/PDO.php";
    require "route/fonctionsIndex.php";
    
    Flight::set('db', $db);

   

    Flight::register('view', 'Smarty', array(), function($smarty){
        $smarty->template_dir = './templates/';
        $smarty->compile_dir = './templates_c/';
        $smarty->config_dir = './config/';
        $smarty->cache_dir = './cache/';
       });

       
       Flight::map('render', function($template, $data){
        Flight::view()->assign($data);
        Flight::view()->display($template);
       });
       

       Flight::start();

?>