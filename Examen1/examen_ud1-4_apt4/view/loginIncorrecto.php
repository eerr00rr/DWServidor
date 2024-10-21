<?php
// Incluimos el header
include 'header.php';
?>

<h1>Login Incorrecto</h1>
<a href="../index.php">Volver</a><br>
<?php
    if (isset($_COOKIE['login'])) {
        echo "<a href='recordatorio_contrasena.php'>He olvidado mi contraseña</a>";
    }
?>

<?php
// Incluimos el footer
include 'footer.php';
?>
