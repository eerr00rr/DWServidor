<?php
    $ruta = 'contador.txt';
    $visitas;

    if (is_file($ruta)) {
        if ($fichero = fopen($ruta, 'w+')) {
            $visitas = intval(fgets($fichero));
            echo $visitas;
            $visitas++;
            fwrite($fichero, $visitas);
            echo "Numero de visitas: $visitas";
        }
    } else {
        if ($fichero = fopen($ruta, 'w')) {
            echo 'ha creado el fichero por primera vez';

            $visitas = 0;
            fwrite($fichero, $visitas);
        } else {
            echo 'Error: creacion de fichero';
        }
    }
?>