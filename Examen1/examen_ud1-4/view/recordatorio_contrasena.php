<?php
    include "header.php";
?>
<h1>Recordatiorio de contraseña</h1>
<form action="../controller/contrasena_ctl.php" method="post">
    <label for="">En que año naciste?</label>
    <input type="date" name="fecha" required><br>
    <input type="submit" value="Validar recordatorio">
</form>
<?php
    include "footer.php";
?>