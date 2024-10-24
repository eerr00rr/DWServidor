<?php 
    function obtenerSuma() {
        $ruta = '../Ejer1/datosEjercicios.txt';
        $suma = 0;

        if (file_exists($ruta)) {
            if ($fichero = fopen($ruta, 'r+')) {
                while (!feof($fichero)) {
                    $numero = str_replace('<br />', '', fgets($fichero));
                    $numero = trim($numero);
                    $suma += (int)$numero;
                }
                echo "la suma es: $suma";
            } else {
                echo "Error: fichero $ruta no abria correctamente";
            }
        } else {
            echo "Error: fichero $ruta no existe";
        }
    }

    obtenerSuma();
?>