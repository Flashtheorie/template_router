<?php
require 'flight/Flight.php';

define(__CSS__, '../src/css/styles.css');

// Création des routes : 
Flight::route('/', function(){
    require("/views/index.php");
});

Flight::route('/about', function(){
    require '/views/about.php';
});


// Fin des routes
Flight::start();
