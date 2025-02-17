<?php

class cuenta
{
	public $id;
	public $codigo;
	public $saldo;
	public $cliente;

	public function __construct($codigo, $saldo, $cliente)
	{
		$this->setId(null);
		$this->setCodigo($codigo);
		$this->setSaldo($saldo);
		$this->setCliente($cliente);
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($value)
	{
		$this->id = $value;
	}

	public function getCodigo()
	{
		return $this->codigo;
	}

	public function setCodigo($value)
	{
		$this->codigo = $value;
	}

	public function getSaldo()
	{
		return $this->saldo;
	}

	public function setSaldo($value)
	{
		$this->saldo = $value;
	}

	public function getCliente()
	{
		return $this->cliente;
	}

	public function setCliente($value)
	{
		$this->cliente = $value;
	}

	public function getNombreApellidosCliente($nombre, $apellidos): string
	{
		return "$nombre $apellidos";
	}
}
