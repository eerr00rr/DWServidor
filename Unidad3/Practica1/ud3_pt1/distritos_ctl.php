<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "datos_distritos.php";
        $nombre = $_GET["nombre"];
        $apellidos = $_GET["apellidos"];
        echo "<h1>Bienvenido $nombre $apellidos !</h1>";

        if (isset($_GET['todosDistritos'])) {
            echo "<h1>Mostrando los datos demográficos de todos los distritos de Valencia</h1>";
            echo "<ul>";
            foreach ($datos_distritos as $distrito => $habitantes) {
                echo "<li>$distrito: $habitantes hab.</li>";
            }
            echo "</ul>";
        } else {
            $select = $_GET['distrito'];
            $valor = $datos_distritos[$select];
            echo "El distrito $select tiene $valor<br>";
        }
        
        echo "<a href='menu.php?nombre=$nombre&apellidos=$apellidos'>Inicio</a>";
    ?>

</body>
</html>