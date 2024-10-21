<?php

require(__DIR__ . '/../Modelo/MEscudos.php');

$id = $_POST['id'];
$defensa = $_POST['defensa'];
$tipo = $_POST['tipo'];

$conexion = new MEscudos();
$escudo["id"] = $id;
$escudo["defensa"] = $defensa;
$escudo["tipo"] = $tipo;

$conexion->createEscudo($escudo);

header("Location: escudos.php");
exit();
?>