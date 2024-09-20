<?php
include 'datos_distritos.php';
$Nombre = isset($_GET['Nombre']) ? htmlspecialchars($_GET['Nombre']) : '';
$Apellidos = isset($_GET['Apellidos']) ? htmlspecialchars($_GET['Apellidos']) : '';
$distrito = isset($_GET['distrito']) ? htmlspecialchars($_GET['distrito']) : '';
$mostrar_todos = isset($_GET['todos_distritos']) ? true : false;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos por Distritos</title>
</head>
<body>
<h2>Bienvenido <?php echo $Nombre . ' ' . $Apellidos; ?>!</h2>

    <?php if ($mostrar_todos): ?>
        <h2>Datos de todos los distritos</h2>
        <ul>
            <?php foreach ($datos_distritos as $distrito => $poblacion): ?>
                <li><?php echo $distrito; ?>: <?php echo $poblacion; ?> hab.</li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <h2>Datos del Distrito seleccionado</h2>
        <?php if (array_key_exists($distrito, $datos_distritos)): ?>
            <p>El distrito  <?php echo $distrito; ?> tiene <?php echo $datos_distritos[$distrito]; ?> habitantes</p>
        <?php else: ?>
            <p>Distrito no encontrado.</p>
        <?php endif; ?>
    <?php endif; ?>

    <a href="menu.php?Nombre=<?php echo urlencode($Nombre); ?>&Apellidos=<?php echo urlencode($Apellidos); ?>">Inicio</a>
</body>
</html>
