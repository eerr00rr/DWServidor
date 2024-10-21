<?php

// Incluimos la función para comprobar usuarios
include "validarUserPassword.php";

// Si los valores no están completos no entraremos
if (!empty($_REQUEST['user']) && !empty($_REQUEST['password'])) {
    // Asignamos los valores a nuevas variables
    $usuario = $_REQUEST['user'];
    $password = $_REQUEST['password'];

    // Comprobamos si usuario y pass coinciden
    if (validarUserPassword($usuario, $password)) {
        $datos = array($usuario, $password);
        $serializar = serialize($datos);
        
        $array = isset($_COOKIE['login']) ? unserialize($_COOKIE['login']) : '';

        if (isset($_COOKIE['login']) && $array[0] == $usuario) {
            header("Location: ../view/successful.php?array=$serializar");
        } else {
            header("Location: ../view/recordatorio.php?array=$serializar");
        }
    } else {

        // Si no coinciden, redirigiremos a 'loginIncorrecto'
        header("Location: ../view/loginIncorrecto.php");
    }
} else {
    // Si el formulari no está completo, redirigiremos a 'missing'
    header("Location: ../view/missing.php");
}
?>
