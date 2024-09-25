<?php 
	include '../libs/bGeneral.php';

	$nombre = '';
	$edad = '';
	$errores = [];

	if (isset($_POST['bAceptar'])) {
		$nombre = recoge('nombre');
		$edad = recoge('edad');

		if (!cTexto($nombre, 'nombre', $errores, 40)) {
			$errores[$nombre] = "El nombre esta mal";
		}
		if (!cNumero($edad, 'edad', $errores)) {
			$errores[$edad] = "La edad esta mal";
		}
		if (count($errores) === 0) {
			header("Location: resultado.php?nombre=$nombre&edad=$edad");
		}
	}
?>

<form action="" method='post'>
	Nombre: <input TYPE="text" NAME="nombre" VALUE="<?= isset($nombre)?$nombre: "";?>">
	<br>
<?php
echo (isset($errores['nombre'])) ? "$errores[nombre] <br>" : "";
?>
	    Edad: <input TYPE="text" NAME="edad" VALUE="<?= isset($edad)?$edad: "";?>">
	<br>
<?php
echo (isset($errores['edad'])) ? "$errores[edad] <br>" : "";

?>
	<br>
    <input TYPE="submit" name="bAceptar" VALUE="aceptar">
</form>