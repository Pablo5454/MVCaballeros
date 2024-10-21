<?php

require(__DIR__ . '/../Modelo/MArmas.php');

$arma = $_GET['id'];

$conexion = new MArmas();
$conexion->armaDestroy($arma);

header("Location: armas.php");
exit();

?>