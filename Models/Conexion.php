<?php namespace Models;

    class Conexion 
    {
        private $datos = array(
            "host" => "localhost",
            "user" => "root",
            "pass" => "",
            "db" => "cruddfacilito"
        );
        private $conx;
        
        public function __construct()
        {
            $this->conx = new \mysqli($this->datos["host"], $this->datos["user"], $this->datos["pass"],$this->datos["db"]);
        }

        public function ConsultaSimple($sql)
        {
            $this->conx->query($sql);
        }

        public function ConsultaRetorno($sql)
        {
            return $this->conx->query($sql);
        }

    }
    

?>