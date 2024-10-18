<?php

require(__DIR__ . '/../Modelo/MArmas.php');

$id = $_POST['id'];
$daño = $_POST['daño'];
$tipo = $_POST['tipo'];

$ArmaSelected['id'] = $id;
$ArmaSelected['daño'] = $daño;
$ArmaSelected['tipo'] = $tipo;

$mArmas = new MArmas();
$mArmas->editArmas($ArmaSelected);

header("Location: armas.php");
exit();

?>