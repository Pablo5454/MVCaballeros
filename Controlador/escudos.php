<?php


require(__DIR__ . '/../Modelo/MEscudos.php');

require_once(__DIR__ . '/../Vistas/VEscudo.php');

$conexion = new MEscudos();
$escudos = $conexion->getEscudos();

$vista = new VEscudos();
$vista -> init();
$vista -> tablaEscudos($escudos);
$vista -> end();

?>