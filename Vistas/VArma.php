<?php

require_once __DIR__ . '/Vista.php';

class VArmas extends Vista{

    public function tablaArmas($armas){
        echo '<table class="table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Daño</th>';
        echo '<th>Tipo de arma</th>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($armas as $arma) {
            echo '<tr>';
            echo '<td>' . $arma["id"] . '</td>';
            echo '<td>' . $arma["daño"] . '</td>';
            echo '<td>' . $arma["tipo"] . '</td>';
            echo '<td><a href="armaEdit.php?id=' . $arma["id"] . '">Editar</a></td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';   
    }

    public function formEditArma($ArmaSelected){
        echo '<h1>FORMULARIO DE EDICIÓN</h1>';
    }

}