<?php
session_start();
// Redirigimos al formulario de login
if (isset($_SESSION['userName'])) {
    header("Location: view/successful.php");
} else {
    header("Location: view/form_login.php");
}
?>
