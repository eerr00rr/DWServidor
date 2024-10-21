<?php
    include "header.php";
?>
<h1>Recordatiorio de contraseña</h1>
<form action="../controller/contrasena_ctl.php" method="post">
    <label for="">Cifra recordatoria</label>
    <input type="number" name="numero" required><br>
    <input type="submit" value="Validar recordatorio">
</form>
<?php
    include "footer.php";
?>