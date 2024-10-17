<?php 
    include 'header.php'; 
    
    $texto = mb_strtoupper('contingut en valencià');
    $enlace = 'Esborra cookies';

    switch ($_COOKIE['lengua']) {
        case 'ing':
            $texto = mb_strtoupper('Content in english');
            $enlace = 'Delete cookie';
            break;
        case 'es':
            $texto = mb_strtoupper('contenido en español');
            $enlace = 'Borrar cookie';
            break;
        case 'val':
            $texto = mb_strtoupper('contingut en valencià');
            $enlace = 'Esborra cookies';
            break;
    }

    echo "<h1>$texto</h1>";
    if (isset($_COOKIE['lengua'])) {
            echo "<a href='ctl/borrar_cookie.php'>$enlace</a>";
    }

    include 'footer.php';
?>