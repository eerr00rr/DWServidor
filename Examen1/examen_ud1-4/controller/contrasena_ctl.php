<?php
    $respuesta = $_REQUEST['fecha'];

    $array = unserialize($_COOKIE['login']);
    $contrasena = $array[1];
    $fecha = $array[2];

    if($fecha == $respuesta) {
        echo "<p>La contraseña es: $contrasena</p>";
        echo "<a href='../index.php'>Volver al inicio</a>";
    } else {
        header("Location: ../view/loginIncorrecto.php");
    }
?>

