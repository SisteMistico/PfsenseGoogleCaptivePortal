<?php
$LOGOUT_MESSAGE = "Connessione avvenuta con successo.";
 ?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Captive Portal Logout Page</title>
  <link rel="stylesheet" type="text/css" href="captiveportal-style.css">
</head>

<body>
<div id="content">
	<div class="login-card">
		<img src="captiveportal-logo.png"/><br>
 		<h1><p class="correct" id="logged"><?php echo $LOGOUT_MESSAGE ?></p></h1>
	</div>
</div>
</body>
</html>
