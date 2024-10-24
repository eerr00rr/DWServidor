<?php
    $numTiradas = 2;
    $usuario = lanzarDados($numTiradas, $usuario);
    $maquina = lanzarDados($numTiradas, $maquina);

    function random() {
        return rand(1, 6);
    }

    function lanzarDados($tiros, $juagador) {
        $i = 0;
        while ($i < $tiros) {
            $juagador[] = random();
            $i++;
        }
        return $juagador;
    }

    function imprimir($jugador, $nombre) {
        $array = [];
        foreach ($jugador as $num) {
            $array[] = "<img src='imagenes/$num.gif'>";
        }
        $array = implode('', $array); 
        echo "$nombre: $array";
    }

    function esPareja($juagador) {
        return $juagador[0] == $juagador[1] ? true : false;
    }

    function jugar($usuario, $maquina) {
        $parejaU = esPareja($usuario);
        $parejaM = esPareja($maquina);

        $sumaU = $usuario[0] + $usuario[1];
        $sumaM = $maquina[0] + $maquina[1];

        $ganador = "El ganador es: ";

        if ($parejaU && $parejaM) {
            if ($parejaU[0] > $maquina[0]) {
                $ganador .= 'Usuario por tener pareja mayor';
            }
            if ($parejaU[0] < $maquina[0]) {
                $ganador .= 'Maquina por tener pareja mayor';
            } 
        } elseif ($parejaU && !$parejaM) {
            $ganador .= 'Usuario por tener pareja';
        } else if (!$parejaU && $parejaM) {
            $ganador .= 'Maquina por tener pareja';
        } else if ($sumaU > $sumaM) {
            $ganador .= 'Usuario por la suma';
        } else if ($sumaU < $sumaM) {
            $ganador .= 'Maquina por la suma';
        } else {
            $ganador .= 'Nadie, Empate';
        }
        echo $ganador;
    }

    imprimir($usuario, 'Usuario');
    imprimir($maquina, 'Maquina');
    echo "<br>";
    jugar($usuario, $maquina);
?>