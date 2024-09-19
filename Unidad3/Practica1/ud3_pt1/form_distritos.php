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
            
        </select>
        <br>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">
        <br>
        <label for="apellidos">Apellidos</label>
        <input type="text" id="apellidos" name="apellidos">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>