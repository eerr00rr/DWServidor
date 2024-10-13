<?php
session_start();
// Incluimos la funcion para comprobar usuarios
include "validarUserPassword.php";
include "eliminarCookie.php";
include "crearCookie.php";
// Si los Valores no estan llenos no entraremos
if (!empty($_REQUEST['user']) && !empty($_REQUEST['password'])) {

    // Asignamos los valores a nuevas variables
    $usuario = $_REQUEST['user'];
    $password = $_REQUEST['password'];

    // Comprobamos si user y pass coinciden
    if (validarUserPassword($usuario, $password)) {
        if (isset($_REQUEST['rec_user'])) {
            crearCookie("cookie_rec", $usuario);
        } else {
            eliminarCookie("cookie_rec");
        }
        $_SESSION['userName'] = $usuario;
        // Redirigimos a successful
        header("Location: ../view/successful.php");
    } else {

        // Si no coincidieran los valores, redirigiremos a 'loginIncorrecto'
        header("Location: ../view/loginIncorrecto.php");
    }
} else {
    // Si el formulario no está completo, redirigiremos a missing'
    header("Location: ../view/missing.php");
}
?>
