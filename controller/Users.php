<?php 

/**
 * 
 */

	
	function ShowUserInfos($id)
	{
		include './config/credentials.php';
		$req = $bdd->prepare("SELECT * FROM users WHERE username = '$id'");
		$req->execute();
		$user = $req->fetch(PDO::FETCH_OBJ);

		echo "<h2>Nom d'utilisateur : </h2><br>".$user->username;
		echo "<br>";

	}


?>