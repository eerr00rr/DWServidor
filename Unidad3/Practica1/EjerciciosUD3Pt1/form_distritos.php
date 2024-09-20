<?php
include "datos_distritos.php";
$Nombre = isset($_GET['Nombre']) ? htmlspecialchars($_GET['Nombre']) : '';
$Apellidos = isset($_GET['Apellidos']) ? htmlspecialchars($_GET['Apellidos']) : '';
$distrito = isset($_GET['distrito']) ? htmlspecialchars($_GET['distrito']) : '';
$poblacion = isset($datos_distritos[$distrito]) ? $datos_distritos[$distrito] : 'Información no disponible';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Distritos</title>
</head>
<body>
<form action="distritos_ctl.php" method="GET">
    <h2>Bienvenido <?php echo $Nombre . ' ' . $Apellidos; ?>!</h2>
    <h1>CONSULTA DE DATOS POR DISTRITOS</h1>
    <input type="hidden" name="Nombre" value="<?php echo htmlspecialchars($Nombre); ?>">
    <input type="hidden" name="Apellidos" value="<?php echo htmlspecialchars($Apellidos); ?>">
    <label>Distrito:</label>
    <select id="distrito" name="distrito">
            <?php
            foreach ($datos_distritos as $distrito => $poblacion) {
                $selected = ($distrito === 'Patraix') ? ' selected' : '';
                echo "<option value=\"$distrito\"$selected>$distrito</option>";
            }
            ?>
        </select><br><br>
        <input type="checkbox" id="todos_distritos" name="todos_distritos">
        <label for="todos_distritos">Mostrar todos los distritos</label>
        <br><br>
        <input type="submit" value="Consultar">
        </form><br><br>
    <a href="menu.php?Nombre=<?php echo urlencode($Nombre); ?>&Apellidos=<?php echo urlencode($Apellidos); ?>">Volver</a><br>
</body>
</html>