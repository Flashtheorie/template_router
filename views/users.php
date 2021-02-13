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
<h1>Bienvenue, vous êtes l'utilisateur <strong> <?= $_GET['id'] ?> </strong></h1>

<div class="jumbotron">Cette page se trouve ici --> 
<code>http://localhost:8888/router/views/users.php?id=<?= $_SESSION['id'] ?></code>

</div>

</div>
</body>
</html>