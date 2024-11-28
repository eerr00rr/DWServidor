<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../controller/edit_cuenta_ctl.php" method='post'>
        <table border='1' cellpadding='2' cellspacing='2'>
            <tr>
                <td>Id</td>
                <td><input type='text' name='id' size='50' / value="<?php echo $cuenta->getId() ?>" readonly></td>
            </tr>
            <tr>
                <td>Codigo</td>
                <td><input type='text' name='codigo' size='50' value="<?php echo $cuenta->getCodigo() ?>" /></td>
            </tr>
            <tr>
                <td>Saldo</td>
                <td><input type='text' name='saldo' size='50' value="<?php echo $cuenta->getSaldo() ?>" /></td>
            </tr>
            <tr>
                <td>Cliente</td>
                <td>
                    <select name="cliente">
                        <?php
                        foreach ($arrayClientes as $cliente) {
                            $selected = $cliente->getId() == $id ? 'selected' : '';
                            echo "<option value='{$cliente->getId()}' $selected>{$cliente->getNombre()} {$cliente->getApellidos()}</option>";
                        }
                        ?>
                        <select>
        </table><br />
        <input type='submit' name='submit' value='Modifica' />
    </form>
    <a href="../controller/list_cuentas_ctl.php">Volver</a>
</body>

</html>