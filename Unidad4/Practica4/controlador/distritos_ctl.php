<?php
    include "../controlador/datos_distritos.php";
    include "../view/header.php";
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
        setcookie('distritoDefecto', serialize($datos_distritos[$select]), time() + 3600, '/');
    }
    
    echo "<a href='menu.php?nombre=$nombre&apellidos=$apellidos'>Inicio</a>";
?>