<?php

require(__DIR__ . '/../Modelo/MEscudos.php');

$escudo = $_GET['id'];

$conexion = new MEscudos();
$conexion->escudoDestroy($escudo);

header("Location: escudos.php");
exit();

?>