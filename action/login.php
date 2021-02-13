<?php 
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once '../config/credentials.php';

$username = $_POST['username'];


$req = $bdd->prepare("SELECT * FROM users WHERE username = '$username'");
$req->execute();


//if ($req->rowCount() == 1)
//{

//}
$_SESSION['id'] = $username;
header("Location: http://localhost:8888/router/index");
?>