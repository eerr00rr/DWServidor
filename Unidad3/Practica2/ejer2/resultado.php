<?php
	include '../libs/bGeneral.php';

	if (isset($_POST['bAceptar'])) {
		$errores = [];
		$nombre = recoge('nombre');

		if (empty($nombre)) {
			$errores['nombre'] = ' esta vacio';				
		} else if (cTexto($nombre, 'nombre', $errores, 40)) {
			$errores['nombre'] = ' el nombre mayor que 40';
		}

		if (!isset($_POST['dado'])) {
			$errores['dado'] = ' ninguno radio seleccionado';
		} else {
			$numDados = $_POST['dado'];
			if ($numDados != '1' && $numDados != '2' && $numDados != '3') {
				$errores[$numDados] = ' numero de datos no existe';
			} else {
				$arrayJugador = [];
				$arrayBot = [];
				$sumaJ = 0;
				$sumaB = 0;
				$resultadoJ = '';
				$resultadoB = '';

				for ($i=0; $i < $numDados; $i++) { 
					$random = array(rand(1, 6), rand(1, 6));

					$arrayJugador[] = $random[0];
					$resultadoJ .= "$random[0] ";
					$sumaJ += $random[0];

					$arrayBot[] = $random[1];
					$resultadoB .= "$random[1] ";
					$sumaB += $random[1];
				}

				$resultadoJ .= " = $sumaJ";
				$resultadoB .= " = $sumaB";
			}
		}

		if (isset($_POST['imagenes'])) {

		} else {

		}
	}
	echo "Jugador $nombre: $resultadoJ";
	echo "Bot: $resultadoB";
	echo "Ganador: ";
?>