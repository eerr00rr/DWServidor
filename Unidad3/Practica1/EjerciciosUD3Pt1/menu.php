<?php

$Nombre = isset($_GET['Nombre']) ? htmlspecialchars($_GET['Nombre']) : '';
$Apellidos = isset($_GET['Apellidos']) ? htmlspecialchars($_GET['Apellidos']) : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
</head>
<body>
    <h1>Bienvenido <?php echo $Nombre . ' ' . $Apellidos; ?>!</h1>
    <a href="form_distritos.php?Nombre=<?php echo urlencode($Nombre); ?>&Apellidos=<?php echo urlencode($Apellidos); ?>">Datos por distritos</a><br>
    <a href="form_patraix.php?Nombre=<?php echo urlencode($Nombre); ?>&Apellidos=<?php echo urlencode($Apellidos); ?>">Datos por barrios (distritos de Patraix)</a><br>
    <a href="index.html">Inicio</a>
</body>
</html>