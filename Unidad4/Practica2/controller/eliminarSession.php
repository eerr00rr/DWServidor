<?php
    function eliminarSession() {
        session_unset();
        session_destroy();
    }
?>