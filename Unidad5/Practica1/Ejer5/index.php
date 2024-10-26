<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div>
        <h1>Libro de visitas</h1>
        <form action="controller.php" method="post">
            <label for="">Tu comentario:</label>
            <textarea name="contenido" id="" cols="30" rows="10" required></textarea>
            <label for="">Tu nombre:</label>
            <input type="text" name="nombre" id="" required>
            <label for="">Tu e-mail:</label>
            <input type="text" name="correo" id="" required>
            <button type="submit" name="publicar">publicar</button>
        </form>
    </div>
    <div>
        <h3>Mostrar todos los comentarios</h3>
        <?php
            include 'controller.php';

            $comentarios = leerFichero('comentarios.txt');
            echo $comentarios;
        ?>
    </div>
</body>
</html>