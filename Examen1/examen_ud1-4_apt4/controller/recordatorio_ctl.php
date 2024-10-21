<?php
    include 'crearCookie.php';

    $usuario = $_REQUEST['usuario'];
    $contrasena = $_REQUEST['contrasena'];
    $numero = $_REQUEST['numero'];
    $datos = array($usuario, $contrasena, $numero);

    if (preg_match("/\d+/", $numero)) { 
        crearCookie('login', serialize($datos));
        header("Location: ../view/recordatorio_correcto.php");
    } else {
        echo "error: hay que introducir solo cifras numericas";
    }

?>