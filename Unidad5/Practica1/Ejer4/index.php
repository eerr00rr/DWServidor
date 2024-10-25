<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button {
            font-size: 20px;
            margin-right: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php
        function random() {
            return rand(1, 6);
        }

        function lanzarDados($tiros) {
            $i = 0;
            $juagador = [];
            while ($i < $tiros) {
                $juagador[] = random();
                $i++;
            }
            return $juagador;
        }

        function imprimir($jugador, $nombre) {
            $resultado = "$nombre: ";
            $array = [];
            foreach ($jugador as $num) {
                $array[] = "<img src='imagenes/$num.gif'>";
            }
            $array = implode('', $array); 
            $resultado .= "$array<br>";
            echo $resultado;
        }

        function esPareja($juagador) {
            return $juagador[0] == $juagador[1] ? true : false;
        }

        function jugar($arrayU, $arrayM) {
            global $puntos;

            $parejaU = esPareja($arrayU);
            $parejaM = esPareja($arrayM);

            $sumaU = $arrayU[0] + $arrayU[1];
            $sumaM = $arrayM[0] + $arrayM[1];

            $ganador = "El ganador es: ";

            if ($parejaU && $parejaM) {
                if ($parejaU[0] > $arrayM[0]) {
                    $ganador .= 'Usuario por tener pareja mayor';
                    $puntos['usuario']++;
                }
                if ($parejaU[0] < $arrayM[0]) {
                    $ganador .= 'Maquina por tener pareja mayor';
                    $puntos['maquina']++;
                } 
            } elseif ($parejaU && !$parejaM) {
                $ganador .= 'Usuario por tener pareja';
                $puntos['usuario']++;
            } else if (!$parejaU && $parejaM) {
                $ganador .= 'Maquina por tener pareja';
                $puntos['maquina']++;
            } else if ($sumaU > $sumaM) {
                $ganador .= 'Usuario por la suma';
                $puntos['usuario']++;
            } else if ($sumaU < $sumaM) {
                $ganador .= 'Maquina por la suma';
                $puntos['maquina']++;
            } else {
                $ganador .= 'Nadie, Empate';
            }
            echo $ganador;
        }

        function leerPuntos($ruta) {
            $puntos = [];
            if ($fichero = fopen($ruta, 'r')) {
                intval(preg_match('/\d+/', fgets($fichero), $matches));
                $puntos['usuario'] = $matches[0];
                intval(preg_match('/\d+/', fgets($fichero), $matches));
                $puntos['maquina'] = $matches[0];
                fclose($fichero);
            } else {
                echo 'Error de fopen';
            }
            return $puntos;
        }

        function escribirPuntos($ruta, $puntos) {
            if ($fichero = fopen($ruta, 'w')) {
                fwrite($fichero, "Usuario: {$puntos['usuario']}" . PHP_EOL);
                fwrite($fichero, "Maquina: {$puntos['maquina']}");
                fclose($fichero);
            } else {
                echo 'Error de fopen';
            }
        }
        
        function refrescarPuntos($ruta) {
            if ($fichero = fopen($ruta, 'w')) {
                fwrite($fichero, "Usuario: 0" . PHP_EOL);
                fwrite($fichero, "Maquina: 0");
                fclose($fichero);
            } else {
                echo 'Error de fopen';
            }
        }

        function guardarPuntos($ruta, $puntosU, $puntosM) {
            if ($fichero = fopen($ruta, 'w')) {
                fwrite($fichero, "Usuario: $puntosU" . PHP_EOL);
                fwrite($fichero, "Maquina: $puntosM");
                fclose($fichero);
            } else {
                echo 'Error de fopen';
            }           
        }


        $ruta = 'resultados.txt';
        $numTiradas = 2;
        $puntos = array('usuario' => 0, 'maquina' => 0);
        $mostrar = true;

        if (isset($_POST['jugar'])) {
            if (is_file($ruta)) {
                $puntos = leerPuntos($ruta);
            }

            $arrayU = lanzarDados($numTiradas);
            $arrayM = lanzarDados($numTiradas);
            imprimir($arrayU, 'Usuario');
            imprimir($arrayM, 'Maquina');
            echo '<br>';
            jugar($arrayU, $arrayM);

            escribirPuntos($ruta, $puntos);
        }
        if (isset($_POST['mostrar'])) {
            $puntos = leerPuntos($ruta);
            $strPuntos;  
            if ($mostrar) {
                $strPuntos = "Usuario: {$puntos['usuario']} , Maquina: {$puntos['maquina']}";
                $mostrar = false;
            } else {
                $strPuntos = '';
                $mostrar = true;
            }
            echo $strPuntos;
        }
        if (isset($_POST['comenzar'])) {
            echo 'puntos refrescado';
            refrescarPuntos($ruta);
        }

    ?>
    <form action="index.php" method="post">
        <button type="submit" name="jugar">Jugar</button>
        <button type="submit" name="mostrar">Mostrar</button>
        <button type="submit" name="comenzar">Comenzar</button>
    </form>
</body>
</html>