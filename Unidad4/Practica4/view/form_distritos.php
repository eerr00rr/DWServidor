<?php 
    include '../controlador/datos_distritos.php';
    include 'header.php';

    $visitas = isset($_COOKIE['visitas']) ? $_COOKIE['visitas']: 0;
    $visitas++;

    setcookie('visitas', $visitas, time() + 3600, "/");
    echo "<h1>$visitas visitas a esta pagina</h1>" 
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