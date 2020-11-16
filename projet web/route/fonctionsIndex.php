<?php

Flight::route('/', function(){
    //effectue le rendu du template sans passer de paramètre
    Flight::view()->display("index.tpl");
});


?>