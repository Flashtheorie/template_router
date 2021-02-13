<?php
require 'flight/Flight.php';

define(__DIR__, 'router');

// Création des routes : 
Flight::route('/index', function(){
    require("views/index.php");
});

Flight::route('/', function(){
    require("views/index.php");
});

Flight::route('/about', function(){
    require 'views/about.php';
});


// Fin des routes
Flight::start();
