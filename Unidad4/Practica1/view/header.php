<?php
    function cabecera($titulo=NULL) // el archivo actual
    {
        if (is_null($titulo)) {
            $titulo = basename(__FILE__);
        }
        ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
    <title>
                    <?php
        echo $titulo;
        ?>
                
                </title>
    <meta charset="utf-8" />
    </head>
    <body>
    <?php
    }

    
?>