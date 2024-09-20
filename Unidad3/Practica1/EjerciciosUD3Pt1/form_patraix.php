<?php 
include "datos_patraix.php";
$Nombre = isset($_GET['Nombre']) ? htmlspecialchars($_GET['Nombre']) : '';
$Apellidos = isset($_GET['Apellidos']) ? htmlspecialchars($_GET['Apellidos']) : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Patraix</title>
</head>
<body>
<form action="patraix_ctl.php" method="POST">
    <h2>Bienvenido <?php echo $Nombre . ' ' . $Apellidos; ?>!</h2>
    <h1>CONSULTA DE DATOS POR BARRIOS (DISTRITOS DE PATRAIX)</h1>
    <input type="hidden" name="Nombre" value="<?php echo htmlspecialchars($Nombre); ?>">
    <input type="hidden" name="Apellidos" value="<?php echo htmlspecialchars($Apellidos); ?>">
    <label>Barrio:</label>
    <select id="barrio" name="barrio">
    <option value="0" selected>Mostrar todos</option>
            <?php
            foreach ($datos_patraix as $id => $barrio) {
                echo "<option value=\"$id\">{$barrio[0]}</option>";
            } ?>
        </select><br><br>
        <input type="submit" value="Consultar">
        </form><br><br>
        <a href="index.html">Inicio</a>
</body>
</html>