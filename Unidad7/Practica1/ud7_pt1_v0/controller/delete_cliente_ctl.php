<?php
require_once '../config/config.inc.php';
require_once '../model/business/class_cliente.php';
require_once '../model/persistence/class_clienteDAO.php';
require_once '../view/printMsg.php';
require_once '../view/linkInicio.php';

$cuentaDAO = new clienteDAO();

// comprobamos si la cuenta existe antes de eliminarla
if (isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];
	$cliente = $clienteDAO->buscarId($id);
}

$msg = null;
try {

	if ($cliente != null) {
		$resultado = $clienteDAO->eliminar($id);

		// el método eliminar retorna false en caso de error
		if ($resultado) {
			$msg = "Datos eliminados correctamente!!";
		}
	} else {
		$msg = "No se ha podido eliminar. La cuenta no existe";
	}
} catch (Exception $e) {
	$msg = "Error al eliminar los datos .$e";
}

if ($msg != null) {
	printMsg($msg);
}

linkInicio();
