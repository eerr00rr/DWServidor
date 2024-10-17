<?php include 'header.php'; ?>
<?php
    $h1 = 'Selecció d\'idioma amb cookies';

    switch ($_COOKIE['lengua']) {
        case 'ing':
            $h1 = 'Language selection with cookies';
            break;
        case 'es':
            $h1 = 'Seleccion de idioma con cookies';
            break;
        case 'val':
            $h1 = 'Selecció d\'idioma amb cookies';
            break;
    }
    echo "<h1>$h1</h1>";
?>
<form action="ctl/controller.php" method="post">
    <label for="select">Selecciona un idioma</label>
    <select name="select" id="">
        <?php
            $array = array('val' => 'Valencìa', 'ing' => 'English', 'es' => 'Español');
            $valorCookie = $_COOKIE['lengua'];

            foreach ($array as $valor => $lengua) {
                $option = "<option value='$valor'";

                if (isset($_COOKIE['lengua']) && $valor == $_COOKIE['lengua']) {
                    $option .= " selected";
                }
                $option .= ">$lengua</option>";
                echo $option;
            }
        ?>
    </select>
    <button type="submit">Envía</button>
</form>

<?php include 'footer.php' ?>