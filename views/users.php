<?php 
require './controller/Users.php';
require './config/credentials.php';
$id = $_GET['id'];



$req = $bdd->prepare("SELECT * FROM users WHERE username = '$id'");
$req->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mon compte</title>
	<link rel="stylesheet" href="../src/css/styles.css">
</head>
<body>
<?php require 'navbar.php'; ?>

<div class="container">
<div class="jumbotron" align="center">

<?php 

if ($req->rowCount() == 1)
{
	ShowUserInfos($_GET['id']);
}
else
{
	echo "Aucun compte n'a été trouvé avec ce nom d'utilisateur : <h3><strong>".$_GET['id']."</strong></h3>";
}

?>
</div>
</div>
</body>
</html>