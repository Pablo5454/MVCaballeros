<?php

require(__DIR__ . '/../Modelo/MEscudos.php');

$id = $_POST['id'];
$daño = $_POST['daño'];
$tipo = $_POST['tipo'];

$EscudoSelected['id'] = $id;
$EscudoSelected['daño'] = $daño;
$EscudoSelected['tipo'] = $tipo;

$mEscudos = new MEscudos();
$mEscudos->editEscudos($EscudoSelected);

header("Location: escudos.php");
exit();

?>