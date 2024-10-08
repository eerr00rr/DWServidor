<?php
    include '../view/header.php';
    echo($_SESSION['hello']);
    echo('Frase introducida correctamente !');
    echo("<br><a href=\"form.php\">Volver</a>");
    include '../view/footer.php';
?>
