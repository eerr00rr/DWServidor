<?php
    function escribirTresNuemeros($num1, $num2, $num3) {
        $mensaje = '';
        $numeros = array($num1, $num2, $num3);

        $fichero = 'datosEjercicios.txt';
        if (fopen($fichero, 'w')) {
            foreach ($numeros as $num) {
                $mensaje .= $num . PHP_EOL;
            }
            $mensaje = nl2br($mensaje);
            fwrite($fichero, $mensaje);
            fclose($fichero);
            return true;
        } else {
            echo 'no ha podido abrir el fichero';
            return false;
        }
    }
    echo escribirTresNuemeros(1, 3, 7);
?>