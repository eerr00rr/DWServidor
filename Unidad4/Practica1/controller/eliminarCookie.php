<?php
    function eliminarCookie($nombre) {
        setcookie($nombre, '', time()-3600);
    }
?>