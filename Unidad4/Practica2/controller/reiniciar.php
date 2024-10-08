<?php
    session_start();
    include 'eliminarSession.php';
    eliminarSession();

    header('Location: ../index.php');
?>