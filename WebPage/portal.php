<?php
if(isset($_GET["login"])&&!empty($_GET)){
  $CLASS = "error";
	$LOGIN_MESSAGE = "Le credenziali inserite sono errate.";
}
else {
  $CLASS = "correct";
	$LOGIN_MESSAGE = "Accedi con le credenziali della tua mail d'istituto";
};
 ?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Captive Portal Login Page</title>
  <link rel="stylesheet" type="text/css" href="captiveportal-style.css">
</head>

<body>
<div id="content">
	<div class="login-card">
		<img src="captiveportal-logo.png"/><br>
 		<h1><p class="<?php echo $CLASS ?>" id="login"><?php echo $LOGIN_MESSAGE ?></p></h1>
	  <form name="login_form" method="post" action="$PORTAL_ACTION$">
		    <input type="text" name="auth_user" placeholder="User" id="auth_user">
		    <input type="password" name="auth_pass" placeholder="Password" id="auth_pass">
		    <input type="submit" name="accept" class="login login-submit" value="Login" id="login">
        <input name="redirurl" type="hidden" value="$PORTAL_REDIRURL$">
        <input name="zone" type="hidden" value="$PORTAL_ZONE$">
        <input name="action" type="hidden" value="$PORTAL_ACTION$">
	  </form>
	</div>
</div>
</body>
</html>
