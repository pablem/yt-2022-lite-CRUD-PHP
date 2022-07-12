<?php namespace Models;

class Seccion
{
    private $id;
    private $nombre;
    private $conexion;

    public function __construct()
    {
        $this->conection = new Conexion();
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
        $sql = "SELECT * FROM secciones";
        return $this->conexion->ConsultaRetorno($sql);
    }

    public function Add()
    {
        $sql = "INSERT INTO secciones (id,nombre) VALUES (null,'{$this->nombre}')";
        return $this->conexion->ConsultaSimple($sql);
    }

    public function Delete()
    {
        $sql = "DELETE FROM secciones WHERE id='{$this->id}'";
        $this->conexion->ConsultaSimple($sql);
    }

    public function Edit()
    {
        $sql = "UPDATE FROM secciones SET nombre='{$this->nombre}' WHERE id='{$this->id}'";
        $this->conexion->ConsultaSimple($sql);
    }

    public function View()
    {
        $sql = "SELECT * FROM secciones WHERE id='{$this->id}'";
        return mysqli_fetch_assoc($this->conexion->ConsultaRetorno($sql));
    }
} 

?>