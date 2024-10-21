<?php

require_once 'Conexion.php';
class MArmas extends Conexion{

    public function getArma($arma){
        $nombreArma = null;
        $sentencia = $this ->getConexion()->prepare("SELECT * FROM arma WHERE id = ?");

        $sentencia->bind_param("s", $arma);
        $sentencia -> execute();

        $resultado = $sentencia->get_result();

        if($fila = $resultado -> fetch_assoc()){
            $nombreArma = $fila;
        }


        return $nombreArma;

    }
    public function getArmas(){
        $query = $this -> getConexion() -> query('SELECT * from arma');
        $armas = [];

        while($fila = $query -> fetch_assoc()){
            $armas[] = $fila;
        }

        return $armas;
    }

    public function editArmas($ArmaSelected){
        $sentencia = $this->getConexion()->prepare("UPDATE arma SET daño = ?, tipo = ? WHERE id = ?");
        $sentencia->bind_param("isi", $ArmaSelected["daño"], $ArmaSelected["tipo"], $ArmaSelected["id"]);

        $sentencia->execute();
        $sentencia->close();
    }

    public function createArma($arma){

        $sentencia = $this->getConexion()->prepare("INSERT INTO arma(id, daño, tipo) VALUES (?,?,?)");
        $sentencia->bind_param("iis", $arma["id"], $arma["daño"], $arma["tipo"]);

        $sentencia->execute();
        $sentencia->close();

    }

    public function armaDestroy($arma){

        $sentencia = $this->getConexion()->prepare("DELETE FROM arma WHERE id=?");
        $sentencia->bind_param("i", $arma);

        $sentencia->execute();
        $sentencia->close();

    }

}