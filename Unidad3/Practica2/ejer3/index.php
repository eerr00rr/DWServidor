<p>
<?php
include 'controller.php';
$errores = $_GET['errores'];
foreach ($errores as $error){
    echo "<br>Error: ". $error ."<br>";
}
?>
</p>
<form ACTION="controller.php" METHOD="POST">
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