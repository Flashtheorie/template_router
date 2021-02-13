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

		echo "<h6>Nom d'utilisateur : </h6><br><h1>".$user->username;
		echo "</h1><br>";
		echo "<a href=''>Modifier son profil</a>";

	}


?>