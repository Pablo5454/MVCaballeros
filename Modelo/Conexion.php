<?php

class Conexion{
    private $conexion;

    public function __construct(){
        $this -> conexion = new \mysqli(hostname:'localhost', username:'root', password: '', database: 'mvccaballeros');
    }
    public function getConexion(): mysqli{
        return $this->conexion;
    }
    public function closeConexion(): void{
        $this -> conexion -> close();
    }
}
