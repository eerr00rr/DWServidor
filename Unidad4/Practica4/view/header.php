<html>
    <head>
        <title>LoginCookie</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
<?php
    if (isset($_COOKIE['nombreApellidos'])) {
        $arrayValor = unserialize($_COOKIE['nombreApellidos']);

        $nombre = $arrayValor[0];
        $apellido = $arrayValor[1];
        echo "<h1>Bienvenido $nombre $apellido !</h1>";
    }
?>
        
