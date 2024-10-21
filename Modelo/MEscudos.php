<?php

require_once 'Conexion.php';
class MEscudos extends Conexion{

    public function getEscudo($escudo){
        $nombreEscudo = null;
        $sentencia = $this ->getConexion()->prepare("SELECT * FROM escudo WHERE id = ?");

        $sentencia->bind_param("s", $escudo);
        $sentencia -> execute();

        $resultado = $sentencia->get_result();

        if($fila = $resultado -> fetch_assoc()){
            $nombreEscudo = $fila;
        }


        return $nombreEscudo;

    }
    public function getEscudos(){
        $query = $this -> getConexion() -> query('SELECT * from escudo');
        $escudos = [];

        while($fila = $query -> fetch_assoc()){
            $escudos[] = $fila;
        }

        return $escudos;
    }

    public function editEscudos($EscudoSelected){
        $sentencia = $this->getConexion()->prepare("UPDATE escudo SET defensa = ?, tipo = ? WHERE id = ?");
        $sentencia->bind_param("isi", $EscudoSelected["defensa"], $EscudoSelected["tipo"], $EscudoSelected["id"]);

        $sentencia->execute();
        $sentencia->close();
    }

    public function createEscudo($escudo){

        $sentencia = $this->getConexion()->prepare("INSERT INTO escudo(id, defensa, tipo) VALUES (?,?,?)");
        $sentencia->bind_param("iis", $escudo["id"], $escudo["defensa"], $escudo["tipo"]);

        $sentencia->execute();
        $sentencia->close();

    }

    public function escudoDestroy($escudo){

        $sentencia = $this->getConexion()->prepare("DELETE FROM escudo WHERE id=?");
        $sentencia->bind_param("i", $escudo);

        $sentencia->execute();
        $sentencia->close();

    }

}