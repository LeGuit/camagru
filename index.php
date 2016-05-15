<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>CAMAGRU</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<script src="js/camera.js"></script>
</head>
<body style="background-color: grey">
<?php include "fragments/header.php" ?>

<video id="video"></video>
<button id="startbutton">Prendre une photo</button>
<canvas id="canvas"></canvas>
<img src="http://placekitten.com/g/320/261" id="photo" alt="photo">


<?php include "fragments/footer.php" ?>

</body>
</html>