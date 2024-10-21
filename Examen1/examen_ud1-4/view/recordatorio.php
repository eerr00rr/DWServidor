<?php
include 'header.php';
$array = unserialize($_REQUEST['array']);
$usuario = $array[0];
$contrasena = $array[1];
?>
<h1>Crear Recordatorio</h1>
<p>ES OBLIGATORIO CREAR UN RECORDATORIO DE CONTRASEÑA</p>
<form action="../controller/recordatorio_ctl.php" method="post">
    <label for="">En que año naciste?</label>
    <input type="date" name="fecha" placeholder="Año de nacimiento" required>
    <br>
    <input type="submit" value="Crear recordatorio" name="recordar">
    <input type="text" hidden name="usuario" value="<?php echo $usuario ?>">
    <input type="text" hidden name="contrasena" value="<?php echo $contrasena ?>">
</form>
<?php
include 'footer.php';
?>