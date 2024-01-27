<?php 
require_once "modeloBase.php";
class Nota extends ModeloBase{
    public $usuario_id;
    public $titulo;
    public $descripcion;
    

    public function __construct(){
        parent::__construct();
    }

    //GUARDAR USUARIO *************************************************************************************************
    public function guardar(){
        $sql="insert into notas (titulo, descripcion, usuario_id, fecha) values ('{$this->titulo}', '{$this->descripcion}', {$this->usuario_id}, curdate())";
        $guardado=$this->db->prepare($sql);
        $guardado->execute();

    }

    /**
     * Get the value of usuario_id
     */ 
    public function getUsuario_id()
    {
        return $this->usuario_id;
    }

    /**
     * Set the value of usuario_id
     *
     * @return  self
     */ 
    public function setUsuario_id($usuario_id)
    {
        $this->usuario_id = $usuario_id;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }
}



?>