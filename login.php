<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Creer un compte</title>
</head>
<body style="background-color: grey">
<?php include "fragments/header.php" ?>

<div>
<form class="forms" action="login.php" method="POST">
	<label for="id">Adresse mail : <input id="id" type="text" name="mail" value="" />
	<br />
	<label for="pass">Mot de passe: <input id="pass" type="password" name="passwd" value="" />
	<br />
	<input type="submit" name="submit" value="OK" />
	<a class="buttonlink" href="create.php">Creer un compte</a>
	<a class="buttonlink" href="modif.php">Modifier mon mot de passe</a>
</form>
</div>
<?php include "fragments/footer.php" ?>
</body>
</html>