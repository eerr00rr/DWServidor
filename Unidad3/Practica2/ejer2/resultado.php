<!-- Una caja de texto para introducir el nombre. (Sólo letras, tamaño máximo 40,
requerido).
• Dos botones radio para seleccionar si jugamos con 1, 2 ó 3 dados. Es obligatorio que el
usuario seleccione una opción.
• Un checkbox para mostrar o no las imágenes de las caras de los dados. Si el usuario no
selecciona la opción no se mostrarán las imágenes.

En caso de que todos los datos sean correctos se realizará en juego. En este caso el jugador
jugará con la máquina y ganará el que obtiene mayor puntuación.
Al pulsar el botón del formulario se lanzarán el número de dados seleccionados por
el usuario tanto para el jugador como para la máquina. Se mostrará el nombre del
usuario, los valores de los dados tirados junto con las imágenes de las caras de los
dados, si es el caso y quien es el ganador, jugador o máquina.
Mostraremos el formulario para poder volver a jugar o un enlace. -->

<?php
	include '../libs/bGeneral.php';

	function elJuego(string $nombre, bool $usar_imagenes, int $dados) : string {
		$imagenes = array(
			'<img src="img/1.png">',
			'<img src="img/2.png">',
			'<img src="img/3.png">',
			'<img src="img/4.png">',
			'<img src="img/5.png">',
			'<img src="img/6.png">'
		);

		$resultado = "";
		$jugador = "$nombre:";
		$ordenador = "Ordenador:";
		$ganador = "Ganador es:";

		$dadosJ = [];
		$sumaJ = 0;

		$dadosO = [];
		$sumaO = 0;

		for ($i=0; $i < $dados; $i++) { 
			$random = array(rand(0, 5), rand(0, 5));

			$dadosJ[] = ($usar_imagenes) ? $imagenes[$random[0]]: $random[0];
			$sumaJ += $random[0];

			$dadosO[] = ($usar_imagenes) ? $imagenes[$random[1]]: $random[1];
			$sumaO += $random[1];
		}

		$dadosJ = implode(", ", $dadosJ);
		$dadosO = implode(", ", $dadosO);
		$ganador = ($sumaJ === $sumaO) ? "$ganador impate" : ($sumaJ > $sumaO ? "$ganador $nombre :)" : "$ganador Ordenador :(");

		$resultado = "$jugador $dadosJ ($sumaJ)<br>
			$ordenador $dadosO ($sumaO)<br>
			$ganador	
		";

		return $resultado;
	}
	if (isset($_POST['bAceptar'])) {
		$errores = [];

		$nombre = cTexto(recoge('nombre'), 'nombre', $errores, 40) ? recoge('nombre') : $errores['nombre'];

		if (!isset($_POST['dado'])) {
			$errores['dado'] = 'Ninguno radio seleccionado';
		} else {
			$num_dados = $_POST['dado'];

			if ($num_dados != '1' && $num_dados != '2' && $num_dados != '3') {
				$resultado = 'Numero de dados no existe';
			} else {
				$usar_imagenes = (isset($_POST['imagenes'])) ? true : false;

				$resultado = eljuego($nombre, $usar_imagenes, $num_dados);
			}
		}

		if (!empty($errores)) {
			echo $errores['nombre'] . '<br>';
			echo $errores['dado'];
		} else {
			echo $resultado;
		}

		echo "<br> <a href='index.php'>Volver</a>";
	} else {
		header("Location: index.php");
	}
?>