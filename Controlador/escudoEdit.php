<?php

require(__DIR__ . '/../Modelo/MEscudos.php');

require_once(__DIR__ . '/../Vistas/VEscudo.php');



$mEscudo = new MEscudos();
$EscudoSelected = $mEscudo->getEscudo($_GET['id']);

$vista = new VEscudos();
$vista->init();
$vista->formEditEscudo($EscudoSelected);
$vista->end();

?>