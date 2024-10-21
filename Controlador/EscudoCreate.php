<?php

require(__DIR__ . '/../Modelo/MEscudos.php');

require(__DIR__ . '/../Vistas/VEscudo.php');

$vista = new VEscudos();
$vista->init();
$vista->formCreateEscudo();
$vista->end();

?>