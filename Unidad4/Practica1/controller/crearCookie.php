<?php
    function crearCookie($nombre, $valor) {
        $cookie = setcookie($nombre, $valor, time()+3600, '/');
        return $cookie;
    }
?>