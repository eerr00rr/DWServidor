<?php
    function crearCookie() {
        setcookie('lengua', '', time() - 3600, '/');
    }
    crearCookie();
    header("Location: ../index.php");
?>