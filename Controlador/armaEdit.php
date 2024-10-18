<?php

require(__DIR__ . '/../Modelo/MArmas.php');

require_once(__DIR__ . '/../Vistas/VArma.php');



$mArma = new MArmas();
$ArmaSelected = $mArma->getArma($_GET['id']);

$vista = new VArmas();
$vista->init();
$vista->formEditArma($ArmaSelected);
$vista->end();

?>