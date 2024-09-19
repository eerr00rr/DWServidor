<?php
    $arrayDni = array('10000000A', '20000000B', '30000000C');

    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];

    $encontrado = false;
    foreach ($arrayDni as $item) {
        if ($dni == $item) {
            $encontrado = true;
            break;
        }
    }

    if ($encontrado) {
        header("Location: menu.php?nombre=$nombre&apellidos=$apellidos");
    } else {
    echo "DNI no válido <br><a href='index.html>Volver</a>";
    }
?>