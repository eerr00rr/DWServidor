<?php
$clienteDAO = new clienteDAO();
$arrayClientes = $clienteDAO->verClientes();
foreach ($arrayClientes as $cliente) {
    $selected = $cliente->getId() == $id ? 'selected' : '';
    echo "<option value='{$cliente->getId()}' $selected>{$cliente->getNombre()} {$cliente->getApellidos()}</option>";
}
