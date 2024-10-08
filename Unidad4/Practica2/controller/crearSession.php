<?php
    function crearSession($nombre, $array) {
        $_SESSION[$nombre] = $array;
    }
?>