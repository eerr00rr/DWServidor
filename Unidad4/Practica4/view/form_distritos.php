<?php 
    include '../controlador/datos_distritos.php';
    include 'header.php';
?>
    <form action="../controlador/distritos_ctl.php" method="get">
        <h1>CONSULTA DATOS POR DISTRITOS</h1>
        <label for="distrito">Distrito:</label>
        <select name="distrito" id="distrito">
            <?php
                $defecto = isset($_COOKIE['distritoDefecto']) ? $_COOKIE['distritoDefecto'] : 'Patraix';

                foreach ($datos_distritos as $distrito => $numero) {
                    if ($distrito == $defecto) {
                        echo "<option value='$distrito' selected>$distrito</option>";
                    } else {
                        echo "<option value='$distrito'>$distrito</option>";
                    }
                }
            ?>
        </select><br>
        <input type="checkbox" name="todosDistritos" id="todosDistritos">
        <label for="todosDistritos">Mostrar todos los distritos</label><br>
        <button type="submit">Consultar</button><br>
        <a href='menu.php'>Inicio</a> 
<?php include 'footer.php'; ?>