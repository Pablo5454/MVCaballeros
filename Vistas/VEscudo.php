<?php

require_once __DIR__ . '/Vista.php';

class VEscudos extends Vista{

    public function tablaEscudos($escudos){
        echo '<table class="table">';
        echo '<thead>';
        echo '<td><a href="escudoCreate.php">Crear escudo</a></td>';

        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Defensa</th>';
        echo '<th>Tipo de escudo</th>';
        echo '</thead>';
        echo '<tbody>';

        foreach ($escudos as $escudo) {
            echo '<tr>';
            echo '<td>' . $escudo["id"] . '</td>';
            echo '<td>' . $escudo["defensa"] . '</td>';
            echo '<td>' . $escudo["tipo"] . '</td>';
            echo '<td><a href="escudoEdit.php?id=' . $escudo["id"] . '">Editar</a></td>';
            echo '<td><a href="escudoDestroy.php?id=' . $escudo["id"] . '">Eliminar</a></td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';   
    }

    public function formEditArma($EscudoSelected){
        echo '<h1>FORMULARIO DE EDICIÓN</h1>';
        ?>
        <form action="escudoUpdate.php" method="post">
           
                <label for="name">Escudo elegida:</label>
                <?php
                echo $EscudoSelected["id"];
                ?>
               <br>
                <input type="number" id="id" name="id" value=<?php echo $EscudoSelected["id"]; ?> hidden/>
                <label for="defensa">Defensa:</label>
                <input type="text" id="defensa" name="defensa" value="<?=$EscudoSelected["defensa"]?>" />
                <br>
                <label for="msg">Tipo:</label>
                <input type = "text" id="tipo" name="tipo" value="<?=$EscudoSelected["tipo"]?>"/>
                <br>
                <button type="submit">Enviar</button>
        </form>

        <?php
    }

    public function formCreateEscudo(){

        echo '<form action="escudoStore.php" method="post">';
        echo '<div>';
        echo '<label for="id">Id del escudo</label>';
        echo '<input type="text" id="id" name="id" required>';
        echo '</div>';
        echo '<div>';
        echo '<label for="nombre">Defensa</label>';
        echo '<input type="text" id="defensa" name="defensa" required>';
        echo '</div>';
        echo '<div>';
        echo '<label for="tipo">Tipo</label>';
        echo '<input type="text" id="tipo" name="tipo" required>';
        echo '</div>';
        echo '<button type="submit">Guardar</button>';
        
        
        echo '</form>';
        echo '<a href="escudos.php"><input type="submit" value="Volver" ></a>';
    


    }

}