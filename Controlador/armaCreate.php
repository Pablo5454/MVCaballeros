<?php

require(__DIR__ . '/../Modelo/MArmas.php');

require(__DIR__ . '/../Vistas/VArma.php');

$vista = new VArmas();
$vista->init();
$vista->formCreateArma();
$vista->end();

?>