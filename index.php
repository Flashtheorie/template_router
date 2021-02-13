<?php
require 'flight/Flight.php';

define(__FILE__, 'http://localhost:8888/router/');

// Création des routes de base: 
Flight::route('/index', function(){
    require("views/index.php");
});

Flight::route('/', function(){
    require("views/index.php");
});

Flight::route('/about', function(){
    require 'views/about.php';
});

Flight::route('/login', function(){
    require 'views/login.php';
});

Flight::route('/logout', function(){
    require 'views/logout.php';
});

// Création des routes compliquées: 
Flight::route('GET /user/@userID+', function($userID){
	$_GET['id'] = $userID;
    require 'views/users.php';
});

// Fin des routes
Flight::start();
