<?php

// route de l'index

Flight::route('/', function(){


    Flight::render("templates/index.tpl", array("titre"=>"Home","logged"=>(isset($_SESSION['logged']) && $_SESSION['logged'] ? $_SESSION['logged'] : null),
    "username" => (isset($_SESSION['username']) ? $_SESSION['username'] : false), 
    "type" => (isset($_SESSION['type']) ? $_SESSION['type'] : false)));
});

//route de GET /inscription

Flight::route("GET /inscription", function(){
    $data = array("route"=>"GET /inscription", "titre"=>"Inscription");
    Flight::render("templates/inscription.tpl", $data);
});

// route de POST /incription

Flight::route('POST /inscription', function(){
    $db = Flight::get('db');
        $messages=array();
        // test nom
        if(empty($_POST['nom'])){
            $messages['nom'] = "Le nom d'utilisateur est obligatoire";
        }
        // test email
        if(empty($_POST['email'])){
            $messages['email']="L'email est obligatoire";
        }elseif (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === FALSE) {
            $messages['email'] = "L'email est invalide";
        }else{
            $st=$db->prepare("select email from Utilisateur where email = ?");
            $st->execute(array($_POST['email']));
            if($st->rowCount()>0){
                $messages['email']="L'email existe déjà";
            }
        }
        //test mdp
        if(empty($_POST['motdepasse'])){
            $messages['motdepasse'] = "Le mot de passe est obligatoire";
        }elseif (strlen($_POST['motdepasse'])<8){
            $messages['motdepasse']="Le mot de passe doit contenir au moins 8 caractères";
        }
    
        //une fois les tests finis
        if(empty($messages)){
            $req = $db->prepare("INSERT INTO `utilisateur`(`Nom`, `Email`, `Motdepasse`, `type`) VALUES (?, ?, ?, 'utilisateur');");
            $req->execute(array($_POST['nom'], $_POST['email'], password_hash($_POST['motdepasse'], PASSWORD_DEFAULT)));
            Flight::redirect('/succes');
    
        }else{
            Flight::view()->assign("erreurs", true);
            Flight::view()->assign("messages",$messages);
            Flight::view()->assign($_POST);
            Flight::view()->display('templates/inscription.tpl', array("titre"=>"Inscription", "route"=>"GET /inscription", "erreur"=>$messages));
        }
    });


    //route du succès d'inscription

    Flight::route("/succes", function(){
        Flight::render("templates/succes.tpl", array("titre"=>"Bienvenue", "route"=>"/succes"));
    });

    //route de la déconnexion

    Flight::route("/deconnexion", function(){
        session_destroy();
        $_SESSION=array();
        session_start();
        Flight::redirect("/");
    });

    Flight::route("GET /connexion", function(){
        Flight::render("templates/connexion.tpl", array("route"=>"GET /connexion", "titre"=>"Connexion"));
    });

    Flight::route("POST /connexion", function(){
        $error = false;
        if (!isset($_POST['email']) || $_POST['email'] == ""){
            $error["email"] = "Merci de remplir ce champs";
        }
        if (!isset($_POST['motdepasse']) || $_POST['motdepasse'] == ""){
            $error["motdepasse"] = "Merci de remplir ce champs";
        }
        if (!$error){
            $db = Flight::get("db");
            $req = $db->prepare("SELECT * FROM utilisateur WHERE Email = ?");
            $req->execute(array($_POST['email']));
            if ($data = $req->fetch()){
                if ( password_verify($_POST['motdepasse'], $data['Motdepasse'])){
                    $_SESSION['logged'] = true;
                    $_SESSION['username'] = $data['Nom'];
                    $_SESSION['type'] = $data['type'];
                }
                else $error['error'] = "Adresse email ou mot de passe invalide.";
            }
            else $error['error'] = " Adresse email ou mot de passe invalide.";
        }
        if ($error){
            Flight::render("templates/connexion.tpl", array("error" => $error,"titre"=>"Echec de connexion", "route"=>"POST /login"));
        }
        else{
            Flight::redirect("./");
        }
    });

?>