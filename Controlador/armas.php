<?php


require(__DIR__ . '/../Modelo/MArmas.php');

require_once(__DIR__ . '/../Vistas/VArma.php');

$conexion = new MArmas();
$armas = $conexion->getArmas();

$vista = new VArmas();
$vista -> init();
$vista -> tablaArmas($armas);
$vista -> end();

?>