<?php
// Incluimos el header
include 'header.php';
$usuario = isset($_COOKIE['cookie_rec']) ? $_COOKIE['cookie_rec'] : "";
$checked = isset($_COOKIE['cookie_rec']) ? "checked ": "";
?>

<h3>Login con Cookies</h3>

<form action="../controller/login_ctl.php" method="post">
    Usuario: <input type="text" name="user" placeholder="nombre de usuario" value="<?php echo $usuario; ?>" /><br />
    Password <input type="password" name="password" placeholder="contraseña" /><br />
    Recordar Usuario: <input type="checkbox" name="rec_user" <?php echo $checked; ?>><br />
    <input type="submit" value="Enviar" />
</form>

<?php
    if (isset($_COOKIE['cookie_rec'])) {
        echo "<a href='../controller/borrarCookie.php'>Borrar Cookies</a>";
    }
// Incluimos el footer
include 'footer.php';
?>
