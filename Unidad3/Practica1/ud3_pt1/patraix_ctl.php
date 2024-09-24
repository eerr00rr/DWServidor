<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'datos_patraix.php'; 

        $select = $_POST['barrios'];
        $valor = $datos_patraix[$select];

        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];

        echo "<h1>Bienvenido $nombre $apellidos !</h1>";
        if ($select === 'todos') {
            echo "<h1>Mostrando los datos demográficos de todos los barrios del distrito Patraix</h1>";
            echo "<ul>";
            foreach ($datos_patraix as $distrito => $valor) {
                echo "<li>$valor[0]: $valor[1] hab.</li>";
            }
            echo "</ul>";
        } else {
            echo "El distrito $valor[0] tiene $valor[1]<br>";
        }
        echo "<a href='menu.php?nombre=$nombre&apellidos=$apellidos'>Inicio</a>";
    ?>
</body>
</html>