<?php namespace Models;

    class Conexion 
    {
        private $datos = array(
            "host" => "localhost",
            "user" => "root",
            "pass" => "",
            "db" => "facilito"
        );
        private $conexion;
        
        public function __construct()
        {
            $this->conexion = new \mysqli($this->datos["host"], $this->datos["user"], $this->datos["pass"],$this->datos["db"]);
        }

        public function ConsultaSimple($sql)
        {
            $this->conexion->query($sql);
        }

        public function ConsultaRetorno($sql)
        {
            return $this->conexion->query($sql);
        }

    }
    

?>