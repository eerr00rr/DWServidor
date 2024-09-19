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
            echo "
                <h1>Bienvenido $nombre $apellidos !</h1>
                <a href='form_distritos.php?nombre=$nombre&apellidos=$apellidos'>Datos por distritos</a>
            ";
        ?> 
        <br>
        <a href='index.html'>Datos por barrios (distrito de Patraix)</a>
        <br><br>
        <a href='index.html'>Volver</a>
    </body>
</html>