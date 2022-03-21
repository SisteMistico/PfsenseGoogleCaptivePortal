<?php
$PORTAL_ACTION = $_POST['action'];

$PORTAL_REDIRURL = $_POST['redirurl'];
$REDIRECT = $PORTAL_ACTION."&login=Error&redirurl=".$PORTAL_REDIRURL;

header("location: ".$REDIRECT);

?>
