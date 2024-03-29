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

        public function Set($atributo, $contenido)
        {
            $this->$atributo = $contenido;
        }

        public function Get($atributo)
        {
            return $this->$atributo;
        }

        public function Listar()
        {
            $sql = "SELECT t1.*,t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.id_seccion = t2.id";
            return $this->conexion->ConsultaRetorno($sql);  
        }

        public function Add()
        {
            $sql = "INSERT INTO estudiantes(id,nombre,esdad,promedio,imagen,id_seccion,fecha)
                    VALUES (null,'{$this->nombre}','{$this->edad}','{$this->promedio}','{$this->imagen}',
                    '{$this->id_seccion},NOW())";
            $this->conexion->ConsultaSimple($sql);
        }

        public function Delete()
        {
            $sql = "DELETE FROM estudiantes WHERE id='{$this->id}'";
            $this->conexion->ConsultaSimple($sql);
        }

        public function Edit()
        {
            $sql = "UPDATE FROM estudiantes SET nombre='{$this->nombre}',edad='{$this->edad}',promedio='{$this->promedio}',
            id_seccion='{$this->id_seccion}' WHERE id='{$this->id}'";
            $this->conexion->ConsultaSimple($sql);
        }

        public function View()
        {
            $sql = "SELECT t1.*,t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.id_seccion = t2.id WHERE t1.id='{$this->id}'";
            return mysqli_fetch_assoc($this->conexion->ConsultaRetorno($sql));
        }

        // public function hola()
        // {
        //     echo "hola soy un estudiante";
        // }
   }
?>