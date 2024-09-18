<?php
    include "ejer3.php";

    $cadena = $_GET['str'];
    $array = explode(' ', $cadena);
    print_r($array);

    $palabraMayor = '';
    $palabraMenor = '';
    $vocalesMax = -1 ;
    $vocalesMin = mb_strlen($cadena); 

    foreach ($array as $palabra) {
        $numVocales = cuentaVocales($palabra);

        if ($numVocales > $vocalesMax) {
            $vocalesMax = $numVocales;
            $palabraMayor = $palabra; 
        }
        if ($numVocales < $vocalesMin) {
            $vocalesMin = $numVocales;
            $palabraMenor = $palabra;
        }
    }

    echo "Palabra con mas vocales es $palabraMayor <br>";
    echo "Palabra con menos vocales es $palabraMenor";
?>