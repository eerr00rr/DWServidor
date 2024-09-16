<?php
    $resultado = 0;

    if (!empty($_GET['x']) && !empty($_GET['y'])) {
        for ($i=1; $i <= $_GET['x']; $i++) { 
            $resultado = ($i % $_GET['y'] == 0) ? $resultado += $i : $resultado = $resultado;
        }
        echo 'la suma desde 1 a ' . $_GET['x'] . ' que son divisible por ' . $_GET['y'] . ' es igual a ' . $resultado;
    } else {
        echo 'por favor rellena todos los campos';
    }
?>