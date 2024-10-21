<?php

require_once __DIR__ . '/Vista.php';

class VArmas extends Vista{

    public function tablaArmas($armas){
        echo '<table class="table">';
        echo '<thead>';
        echo '<td><a href="armaCreate.php">Crear arma</a></td>';

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
            echo '<td><a href="armaDestroy.php?id=' . $arma["id"] . '">Eliminar</a></td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';   
    }

    public function formEditArma($ArmaSelected){
        echo '<h1>FORMULARIO DE EDICIÓN</h1>';
        ?>
        <form action="armaUpdate.php" method="post">
           
                <label for="name">Arma elegida:</label>
                <?php
                echo $ArmaSelected["id"];
                ?>
               <br>
                <input type="number" id="id" name="id" value=<?php echo $ArmaSelected["id"]; ?> hidden/>
                <label for="daño">Daño:</label>
                <input type="text" id="daño" name="daño" value="<?=$ArmaSelected["daño"]?>" />
                <br>
                <label for="msg">Tipo:</label>
                <input type = "text" id="tipo" name="tipo" value="<?=$ArmaSelected["tipo"]?>"/>
                <br>
                <button type="submit">Enviar</button>
        </form>

        <?php
    }

    public function formCreateArma(){

        echo '<form action="armaStore.php" method="post">';
        echo '<div>';
        echo '<label for="id">Id del arma</label>';
        echo '<input type="text" id="id" name="id" required>';
        echo '</div>';
        echo '<div>';
        echo '<label for="nombre">Daño</label>';
        echo '<input type="text" id="daño" name="daño" required>';
        echo '</div>';
        echo '<div>';
        echo '<label for="tipo">Tipo</label>';
        echo '<input type="text" id="tipo" name="tipo" required>';
        echo '</div>';
        echo '<button type="submit">Guardar</button>';
        
        
        echo '</form>';
        echo '<a href="armas.php"><input type="submit" value="Volver" ></a>';
    


    }

}