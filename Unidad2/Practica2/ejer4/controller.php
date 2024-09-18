<?php
    include 'contieneSubcadena.php';

    $cadena = $_GET["str"];
    $subcadena = $_GET["sub"];

    $resultado = "";
    $palabras = explode(' ', $cadena);

    foreach($palabras as $palabra) {
        echo $palabra;
        if (contieneSubcadena($palabra, $subcadena) !== false) {
            $resultado .= "$palabra, ";
        }
    }

    $resultado = mb_substr($resultado, 0, -2);
    echo "Las palabras que tienen ($subcadena) son: $resultado";
?>