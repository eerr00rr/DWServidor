<?php 
    include 'datos_distritos.php';
?>
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
    <form action="distritos_ctl.php" method="get">
        <h1>CONSULTA DATOS POR DISTRITOS</h1>
        <label for="distrito">Distrito:</label>
        <select name="distrito" id="distrito">
            <?php
                foreach ($datos_distritos as $distrito => $numero) {
                    if ($distrito == 'Patraix') {
                        echo "<option value='$distrito' selected>$distrito</option>";
                    } else {
                        echo "<option value='$distrito'>$distrito</option>";
                    }
                }
            ?>
        </select><br>
        <input type="checkbox" name="todosDistritos" id="todosDistritos">
        <label for="todosDistritos">Mostrar todos los distritos</label><br>
        <button type="submit">Consultar</button><br>
        <?php echo "<input type=\"hidden\" name=\"nombre\" value=\"$nombre\">";?>      
        <?php echo "<input type=\"hidden\" name=\"apellidos\" value=\"$apellidos\">";?> 
        <?php echo "<a href='menu.php?nombre=$nombre&apellidos=$apellidos'>Inicio</a>";?>; 
    </body>
</html>