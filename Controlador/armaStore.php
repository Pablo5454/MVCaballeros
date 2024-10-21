<?php

require(__DIR__ . '/../Modelo/MArmas.php');

$id = $_POST['id'];
$daño = $_POST['daño'];
$tipo = $_POST['tipo'];

$conexion = new MArmas();
$arma["id"] = $id;
$arma["daño"] = $daño;
$arma["tipo"] = $tipo;

$conexion->createArma($arma);

header("Location: armas.php");
exit();
?>