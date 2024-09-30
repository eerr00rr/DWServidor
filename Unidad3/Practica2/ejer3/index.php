<?php
    include '../libs/bGeneral.php';
	
    function pintaRadio($provincias, $name) {
        foreach ($provincias as $provincia) {
            echo "<input type='radio' name='$name' value='$provincia'> $provincia";
        }
    }

    function pintaCheck($aficiones, $name) {
        $brackets = '[]';
        foreach ($aficiones as $aficion) {
            echo "<input type='checkbox' name='$name$brackets' value='$aficion'> $aficion";
        }
    }

    if (isset($_POST['bAceptar'])) {
        $errores = [];
        $imagen_aleatoria;
        $resultado = "<h1>Bienvenido</h1>";


        $nombre = (cTexto(recoge('nombre'), 'nombre', $errores, 40) || !empty(recoge('nombre'))) ? recoge('nombre') : $errores['nombre'];
        $resultado .= "$nombre<br>";

        if (isset($_POST['provincias'])) {
            $radio = $_POST['provincias'];
            $resultado .= "$radio<br>";
        } else {
            $errores['provincias'] = 'Error en el campo radio';
        }
        
        if (isset($_POST['aficiones'])) {
            $checkbox = $_POST['aficiones'];

            foreach ($checkbox as $box) {
                $resultado .= "$box<br>";
            }
        } else {
            $errores['aficiones'] = 'Error en el campo checkbox';
        }

        $premium = (isset($_POST['premium'])) ? $_POST['premium'] : "";
        $resultado .= "$premium<br>";

        $mostrar_imagen = (isset($_POST['imagenes'])) ? "<img src='img/1.png'>" : '';
        $resultado .= "$mostrar_imagen<br>";

        if (!empty($errores)) {
			echo 'Errores en los siguentes campos:';
        } else {
            echo $resultado;
        }

    } else if (isset($_POST['Clear'])) {
        header("Location: index.php"); 
   }
?>
<p>
<?php
foreach ($errores as $error){
    echo "Error: ". $error ."<br>";
}
?>
</p>
<form ACTION="#" METHOD="POST">
<p>Nombre: <input TYPE="text" name="nombre"></p>
<p>
<?php
	$provincias = array("Valencia", "Alicante", "Castellon");
	pintaRadio($provincias, "provincias");
?>
</p>
<p>
<?php
    $aficiones = array("cine", "deporte", "viajar", "videojuegos");
	pintaCheck($aficiones, "aficiones");
?>
</p>
<input type="checkbox" name="premium" value="premium seleccionado"> Premium<br>
<input type="checkbox" name="imagenes"> Quiero mostrar imágenes<br><br>
<input TYPE="submit" name="Clear" VALUE="Limpiar"><input TYPE="submit" name="bAceptar" VALUE="Enviar">
</form>