<?php
    function contador() {
        $ruta = 'contador.txt';

        if (is_file($ruta)) {
            if ($fichero = fopen($ruta, 'r+')) {
                $visitas = intval(fgets($fichero));
                $visitas++;

                ftruncate($fichero, 0);
                rewind($fichero);

                fwrite($fichero, $visitas);
                fclose($fichero);
            } else {
                echo "no podia abrir $fichero";
            }
        } else {
            if ($fichero = fopen($ruta, 'w')) {
                echo 'ha creado el fichero por primera vez<br>';

                $visitas = 1;
                fwrite($fichero, $visitas);
                fclose($fichero);
            } else {
                echo 'Error: creacion de fichero';
            }
        }
        return $visitas;
    }
    $visitas = contador();
    echo "Numero de visitas: $visitas";
?>