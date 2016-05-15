<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modifier son mot de passe</title>
</head>
<body style="background-color: grey">
<?php include "fragments/header.php" ?>
<div>
<form class="forms" action="modif.php" method="POST">
	<label for="id">* Adresse mail : </label><input id="id" type="text" name="login" value="" />
	<br />
	<label for="oldpass">* Ancien mot de passe: </label><input id="oldpass" type="password" name="oldpw" value="" />
	<br />
	<label for="newpass">* Nouveau mot de passe: </label><input id="newpass" type="password" name="newpw" value="" />
	<br />
	<div style="font-size: 8px">
		* champs requis
	</div>
	<input type="submit" name="submit" value="OK" />
</form>
</div>
<?php include "fragments/footer.php" ?>
</body>
</html>
