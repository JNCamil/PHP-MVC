<?php
require_once "config/database.php";
//MÉTODOS COMUNES a todos los modelos
class ModeloBase
{
    /************************************************************************ */
    public $db;
    public function __construct()
    {
        $this->db = Database::conectar();
    }

    public function conseguirTodos($tabla)
    {
        $query=$this->db->prepare("select * from $tabla");
        $query->execute();
        $result=$query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
        //var_dump($result);
    }





}


?>