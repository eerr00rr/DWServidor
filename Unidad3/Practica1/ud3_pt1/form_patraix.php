<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = $_GET['nombre'];
        $apellidos = $_GET['apellidos'];
        echo "<h1>Bienvenido $nombre $apellidos !</h1>";
    ?>

    <form action="patraix_ctl.php" method="post">
        <h1>CONSULTA DATOS POR BARRIOS (DISTRITO DE PATRAIX)</h1>
        <label for="barrios">Barrio:</label>
        <select name="barrios" id="barrios">
            <option value="todos" selected>Mostrar todos</option>
            <?php
                include "datos_patraix.php";
                foreach ($datos_patraix as $key => $value) {
                    echo "<option value='$key'>$value[0]</option>";
                }
            ?>
        </select>
        <br>
        <button type="submit">Consultar</button>
        <?php echo "<input type=\"hidden\" name=\"nombre\" value=\"$nombre\">";?>  
        <?php echo "<input type=\"hidden\" name=\"apellidos\" value=\"$apellidos\">";?>  
    </form>
    <a href="menu.php">Volver</a>
</body>
</html>