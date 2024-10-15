<?php include "header.php"; ?>
    <form action="../controlador/patraix_ctl.php" method="post">
        <h1>CONSULTA DATOS POR BARRIOS (DISTRITO DE PATRAIX)</h1>
        <label for="barrios">Barrio:</label>
        <select name="barrios" id="barrios">
            <option value="todos" selected>Mostrar todos</option>
            <?php
                include "../controlador/datos_patraix.php";
                foreach ($datos_patraix as $key => $value) {
                    echo "<option value='$key'>$value[0]</option>";
                }
            ?>
        </select>
        <br>
        <button type="submit">Consultar</button>
    </form>
    <a href="menu.php">Volver</a>
<?php include "footer.php"; ?>