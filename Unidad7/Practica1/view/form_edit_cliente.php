<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../controller/edit_cliente_ctl.php" method='post'>
        <table border='1' cellpadding='2' cellspacing='2'>
            <tr>
                <td>Id</td>
                <td><input type='text' name='id' size='50' value="<?php echo $cliente->getId() ?>" readonly />
            <tr>
            <tr>
                <td>DNI</td>
                <td><input type='text' name='dni' size='50' value="<?php echo $cliente->getDni() ?>" /></td>
            <tr>
                <td>Nombre</td>
                <td><input type='text' name='nombre' size='50' value="<?php echo $cliente->getNombre() ?>" /></td>
            </tr>
            <tr>
                <td>Apellidos</td>
                <td><input type='text' name='apellidos' size='50' value="<?php echo $cliente->getApellidos() ?>" /></td>
            </tr>
            <tr>
                <td>Fecha Nacimiento</td>
                <td><input type='date' name='fechaN' size='50' value="<?php echo $cliente->getFechaN() ?>" /></td>
            </tr>
        </table><br />
        <input type='submit' name='submit' value='Modifica' />
    </form>
    <a href="../controller/list_clientes_ctl.php">Volver</a>
</body>

</html>