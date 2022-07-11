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
            $sql = "SELECT t1.*,t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.id_seccion = t2.id";
            return $this->conexion->ConsultaRetorno($sql);  
        }

        public function add()
        {
            $sql = "INSERT INTO estudiantes(id,nombre,esdad,promedio,imagen,id_seccion,fecha)
                    VALUES (null,'{this->nombre}','{this->edad}','{this->promedio}','{this->imagen}',
                    '{this->id_seccion},NOW())";
            $this->conexion->ConsultaSimple($sql);
        }

        public function delete()
        {
            $sql = "DELETE FROM estudiantes WHERE id='{this->id}'";
            $this->conexion->ConsultaSimple($);
        }
   }
?>