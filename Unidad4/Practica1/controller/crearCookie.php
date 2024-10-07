<?php
    function crearCookie($nombre, $valor) {
        setcookie($nombre, $valor, time()+3600, '/');
    }
?>