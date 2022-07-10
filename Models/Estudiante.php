<?php namespace Models; 
   class Estudiante
   {
        private $id;
        private $nombre;
        private $edad;
        private $promedio;
        private $imagen;
        private $id_seccion;
        private $fecha;
        private $conexion;

        public function __construct()
        {
            $this->conexion = new Conexion();
        }

        public function Listar()
        {
            $sql = "SELECT t1.*,"
        }
   }
?>