<?php
    function crearCookie($lengua) {
        setcookie('lengua', $lengua, time() + 3600, '/');
    }
?>