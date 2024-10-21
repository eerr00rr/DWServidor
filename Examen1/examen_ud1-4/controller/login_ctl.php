<?php

// Incluimos la función para comprobar usuarios
include "validarUserPassword.php";

// Si los valores no están completos no entraremos
if (!empty($_REQUEST['user']) && !empty($_REQUEST['password'])) {
    $usuarios = array('usuario' => '123');
    // Asignamos los valores a nuevas variables
    $usuario = $_REQUEST['user'];
    $password = $_REQUEST['password'];

    // Comprobamos si usuario y pass coinciden
    if (validarUserPassword($usuario, $password)) {
        $datos = array($usuario, $password);
        $serializar = serialize($datos);

        if (isset($_COOKIE['login'])) {
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
