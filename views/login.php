<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Connexion</title>
	<link rel="stylesheet" href="./src/css/styles.css">
</head>
<body>
<?php require 'navbar.php'; ?>

<div class="container">
  <div class="jumbotron" align="center">
    <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                	<form action="./action/login.php" method="POST">
                    <input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur"> 
                    <br>
                    <input type="text" class="form-control" name="password" placeholder="Mot de passe"> 
                    <hr>
                    <input type="submit" class="form-control" value="Connexion">
                	</form>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4"></div>
        </div><!-- /.row -->
  
</div>
</body>
</html>