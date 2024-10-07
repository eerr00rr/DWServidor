<?php
    function crearSession($array) {
        session_start();
        $_SESSION['hello'] = serialize($array);
    }
?>