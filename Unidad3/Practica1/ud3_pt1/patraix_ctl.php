<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $select = $_POST['datos_patraix'];

        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        echo "<h1>Bienvenido $nombre $apellidos !</h1>";
        if (isset($select)) {
            echo "<h1>Mostrando los datos demográficos de todos los barrios del distrito Patraix</h1>";
            echo "<ul>";
            foreach ($select as $distrito => $habitantes) {
                echo "<li>$distrito[0]: $distrito[1] hab.</li>";
            }
            echo "</ul>";
        } else {
            $valor = $select[1];
            echo "El distrito $select[0] tiene $valor<br>";
        }
        echo "<a href='menu.php?nombre=$nombre&apellidos=$apellidos'>Inicio</a>";
    ?>
</body>
</html>