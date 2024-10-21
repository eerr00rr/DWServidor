<?php
    include 'crearCookie.php';

    $usuario = $_REQUEST['usuario'];
    $contrasena = $_REQUEST['contrasena'];
    $fecha = $_REQUEST['fecha'];
    $datos = array($usuario, $contrasena, $fecha);

    crearCookie('login', serialize($datos));

    header("Location: ../view/recordatorio_correcto.php");
?>