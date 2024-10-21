<?php
function borrarCookie($nombreCookie) {
	if (isset($_COOKIE[$nombreCookie])) {
         setcookie($nombreCookie, "", time() - 3600, "/");
	}
}
borrarCookie('login');
header("Location: ../index.php");
?>