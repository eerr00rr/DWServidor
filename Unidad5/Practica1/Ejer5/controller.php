<?php
    function probarForm($comentario, $nombre, $email) {
        $array = [];

        if (strlen($comentario) > 100) {
            $array['comentario'] = 'desmasiado largo';
        }
        if (!preg_match("/^[a-zA-Z-' ]*$/", $nombre)) {
            $array['nombre'] = 'caracteres no permedidos';
        }
        if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
            $array['correo'] = 'correo invalido';
        }

        return $array;
    }

    function construirComentario($contenido, $nombre, $correo) {
        $str = '';
        $fecha = date('d-m-Y');

        $str = "<b>$nombre</b> (<a href=''>$correo</a>) escrito el <i>$fecha</i><br>$contenido";
        return $str;
    }

    function crearFichero($ruta) {
        if (!is_file($ruta)) {
            if($fichero = fopen($ruta, 'w')) {
                fclose($fichero);
            } else {
                return false;
            }
        }
        return true;
    }

    function leerFichero($ruta) {
        $contenidoFichero = '';
        if ($fichero = fopen($ruta, 'r')) {
            if (filesize($ruta) > 0) {
                $contenidoFichero = fread($fichero, filesize($ruta));
            } 
            fclose($fichero);
        }
        return $contenidoFichero;
    }

    function escribirFichero($ruta, $comentario) {
        $str = nl2br(PHP_EOL . $comentario . PHP_EOL);
        $contenidoFichero = leerFichero($ruta);
        if ($fichero = fopen($ruta, 'w')) {
            fwrite($fichero, $str . $contenidoFichero);
            fclose($fichero);
        }
    }

    if (isset($_POST['publicar'])) {
        $contenido = $_POST['contenido'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $errores = probarForm($contenido, $nombre, $correo);
        $ruta = 'comentarios.txt';

        if (crearFichero($ruta)) {
            if (empty($errores)) {
                $comentario = construirComentario($contenido, $nombre, $correo);
                escribirFichero($ruta, $comentario); 
                header("Location: index.php");
            } else {
                echo "Errores en los siguientes partes:<br><br>";
                foreach ($errores as $key => $value) {
                    echo "$key: $value<br>";
                }
            }
        } else {
            echo 'Error: fichero no habia creado';
        }
    }
?>