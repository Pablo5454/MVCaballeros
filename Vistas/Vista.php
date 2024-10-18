<?php

class Vista{
    public function init(){
        echo '<!DOCTYPE html>';
        echo '<html lang="es">';
        echo '<head>';
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<title>Aplicación MVC Caballeros</title>';
        echo '</head>';
        echo '<body>';
        echo '<div class="container">';
    }

    public function end(){
        echo '</div> <!-- cierre de div container -->';
        echo '</body>';
        echo '</html>';

    }
}