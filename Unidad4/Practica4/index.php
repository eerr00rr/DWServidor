<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DATOS DEMOGRAPHICOS</h1>
    <form action="controlador/validar_ctl.php" method="post">
        <label for="dni">DNI</label>
        <input type="text" id="dni" name="dni" required placeholder="introduce tu DNI"><br>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="apellidos">Apellidos</label>
        <input type="text" id="apellidos" name="apellidos"><br>
        <button type="submit">Enviar</button>
    </form>
    <?php
        if (empty(!$_COOKIE)) {
            echo '<a href="controlador/borrar_cookies.php">Borrar Cookies</a>';
        }
    ?>
</body>
</html>