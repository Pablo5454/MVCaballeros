<?php

require(__DIR__ . '/../Modelo/MEscudos.php');

$id = $_POST['id'];
$defensa = $_POST['defensa'];
$tipo = $_POST['tipo'];

$EscudoSelected['id'] = $id;
$EscudoSelected['defensa'] = $defensa;
$EscudoSelected['tipo'] = $tipo;

$mEscudos = new MEscudos();
$mEscudos->editEscudos($EscudoSelected);

header("Location: escudos.php");
exit();

?>