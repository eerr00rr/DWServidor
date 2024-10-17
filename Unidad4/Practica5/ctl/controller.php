<?php
    include 'crear_cookie.php';

    $lengua = $_REQUEST['select'];
    crearCookie($lengua);

    header('Location: ../contenido.php');
?>