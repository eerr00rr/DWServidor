		<table border="1">
			<tr>
				<th>CUENTAS: </h3>
				</th>
			</tr>
			<?php
			foreach ($arrayCuentas as $cuenta) {
				$cliente = $clienteDAO->buscarId($cuenta->getCliente());
			?>
				<tr>
					<td><b>Cuenta num: </td>
					<td><?php echo $cuenta->getId(); ?></td>
					<td><a href="../controller/delete_cuenta_ctl.php?id=<?php echo $cuenta->getId() ?>">Eliminar</a></td>
				</tr>
				<tr>
					<td>Codigo: </td>
					<td><?php echo $cuenta->getCodigo(); ?></td>
					<td><a href="../controller/edit_cuenta_ctl.php?id=<?php echo $cuenta->getId() ?>">Modificar</a></td>
				</tr>
				<tr>
					<td>Saldo: </td>
					<td><?php echo $cuenta->getSaldo(); ?></td>
				</tr>
				<tr>
					<td>Cliente: </td>
					<td> <?php echo $cuenta->getNombreApellidosCliente($cliente->getNombre(), $cliente->getApellidos()); ?></td>
				</tr>
			<?php
			}
			?>
		</table>