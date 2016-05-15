<?php
$safe_pass = hash("whirlpool", $_POST['pass']);
$sql = 'INSERT INTO operateursaisie VALUES(\'\',
\'' . mysql_real_escape_string($_POST['firstname']) . '\',
\'' . mysql_real_escape_string($_POST['lastname']) . '\',
\'' . mysql_real_escape_string($_POST['email']) . '\',
\'' . mysql_real_escape_string($_POST['pass']) . '\',
);';

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<html>
<head>
	<title>Create Account</title>
</head>
<body style="background-color: grey">
<?php include "fragments/header.php" ?>
<div>
<form class="forms" action="create.php" method="POST">
	<label for="firstname">* Pr&eacute;nom : </label><input id="firstname" type="text" name="first_name" value="" />
	<br />
	<label for="lastname">* Nom : </label><input id="lastname" type="text" name="last_name" value="" />
	<br />
	<label for="mail">* E-mail : </label><input id="mail" type="mail" name="mail" value="" />
	<br />
	<label for="pass">* Mot de passe : </label><input id="pass" type="password" name="passwd" value="" />
	<br/>
	<label for="pass2">* R&eacute;p&eacute;ter votre mot de passe : </label><input id="pass2" type="password" name="passwdcheck" value="" />
	<br />
	<div style="font-size : 10px">* champs requis</div>
	<input type="submit" name="submit" value="OK" />
</form>
</div>
<?php include "fragments/footer.php" ?>
</body>
</html>
