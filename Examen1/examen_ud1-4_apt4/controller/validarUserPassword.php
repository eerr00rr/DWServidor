<?php
function validarUserPassword($a, $b) {
    // En este array están las contraseñas indexadas con el usuario (como si fuera una BBDD)
    $usuarios = array('usuario' => '123', 'abastos' => 'abastos');
    // Si el valor de la casilla indexada con el nombre del usuario (la password real)
    // es igual que la password introducida retorna true, si no; false
    if ($usuarios[$a] == $b) {
        $ok = true;
    } else {
        $ok = false;
    }
	return $ok;
}
?>
