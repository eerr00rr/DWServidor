<html>

    <head>
        <title>LoginCookie</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            $index = 'Inici';
            $contenido = 'Contingut';

            switch ($_COOKIE['lengua']) {
                case 'ing':
                    $index = 'Index';
                    $contenido = 'Content';
                    break;
                case 'es':
                    $index = 'Indice';
                    $contenido = 'Contenido';
                    break;
                case 'val':
                    $index = 'Inici';
                    $contenido = 'Contingut';
                    break;
            }
            echo "<nav><a href='index.php'>$index</a> <a href='contenido.php'>$contenido</a></nav>";
        ?>