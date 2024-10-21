<?php
// Incluimos el header
include 'header.php';
?>

<h3>Login</h3>

<form action="../controller/login_ctl.php" method="post">
    Usuario: <input type="text" name="user" placeholder="Nombre de usuario" /><br />
    Contraseña: <input type="password" name="password" placeholder="Contraseña" /><br />
    <input type="submit" value="Enviar" />
</form>

<?php
// Incluimos el footer
include 'footer.php';
?>
