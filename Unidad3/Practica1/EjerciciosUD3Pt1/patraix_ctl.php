<?php
include 'datos_patraix.php';

$Nombre = isset($_POST['Nombre']) ? htmlspecialchars($_POST['Nombre']) : '';
$Apellidos = isset($_POST['Apellidos']) ? htmlspecialchars($_POST['Apellidos']) : '';
$barrio_id = isset($_POST['barrio']) ? intval($_POST['barrio']) : 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos de Barrios de Patraix</title>
</head>
<body>
<h2>Bienvenido <?php echo $Nombre . ' ' . $Apellidos; ?>!</h2>
    <?php if ($barrio_id === 0): ?>
        <h2>Mostrando los datos de todos los barrios del distrito de Patraix</h2>
        <ul>
            <?php foreach ($datos_patraix as $id => $barrio): ?>
                <li><?php echo $barrio[0]; ?>:<?php echo $barrio[1]; ?> hab.</li>
            <?php endforeach; ?>
        </ul>
    <?php elseif (array_key_exists($barrio_id, $datos_patraix)): ?>
        <?php $barrio = $datos_patraix[$barrio_id]; ?>
        <p>El Barrio: <?php echo $barrio[0]; ?> tiene <?php echo $barrio[1]; ?> hab.</p>
    <?php else: ?>
        <p>Barrio no encontrado.</p>
    <?php endif; ?>

    <a href="index.html">Inicio</a>
</body>
</html>
