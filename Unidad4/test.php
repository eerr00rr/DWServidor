<?php
session_start();

$nombre = $_SESSION['usuario'];

echo $nombre;

session_unset();