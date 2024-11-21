<?php
require_once '../config/config.inc.php';
require_once '../model/business/class_cliente.php';
require_once '../model/persistence/class_clienteDAO.php';
require_once '../view/printMsg.php';
require_once '../view/linkInicio.php';

$clienteDAO = new clienteDAO();
$id = $_REQUEST['id'];
$cliente = $clienteDAO->buscarId($id);

$msg = null;

try {
	// si venimos de hacer submit al formulario, tenemos que crear el objeto cuenta y persistirlo a la BDD
	if (isset($_REQUEST['submit'])) {
		// vamos a crear una cuenta
		// inicialmente todos sus parámetros son null
		// después le asignaremos los valores recibidos del formulario
		$clienteModificado = new cliente(null, null, null, null);

		if (isset($_REQUEST['dni'])) {
			$clienteModificado->setDni($_REQUEST['dni']);
		}

		if (isset($_REQUEST['nombre'])) {
			$clienteModificado->setNombre($_REQUEST['nombre']);
		}

		if (isset($_REQUEST['fechaN'])) {
			$clienteModificado->setFechaN($_REQUEST['fechaN']);
		}

		$resultado = $cuentaDAO->modificar($id, $clienteModificado->getDni(), $clienteModificado->getNombre(), $clienteModificado->getApellidos(), $clienteModificado->getFechaN());

		// el método inserir retorna false en caso de error
		if ($resultado) {
			$msg = "Cuenta con la id $id ha sido modificado correctamente";
		}
		// si no venimos de hacer submit, mostramos el formulario al usuario
	} else {
		require_once '../view/form_edit_cliente.php';
	}
} catch (Exception $e) {
	$msg = "Error al introducir los datos .$e";
}

if ($msg != null) {
	printMsg($msg);
	linkInicio();
}
