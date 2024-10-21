<?php
    $respuesta = $_REQUEST['numero'];

    $array = unserialize($_COOKIE['login']);
    $contrasena = $array[1];
    $numero = $array[2];

    if($numero == $respuesta) {
        echo "<p>La contraseña es: $contrasena</p>";
        echo "<a href='../index.php'>Volver al inicio</a>";
    } else {
        header("Location: ../view/loginIncorrecto.php");
    }
?>

