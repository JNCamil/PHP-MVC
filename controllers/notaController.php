<?php 

class NotaController{
    public function listar(){
        //Modelo
        require_once "models/nota.php";

        //Lógica acción controlador
        $nota = new Nota();
        $nota->setNombre("Nota número1");
        $nota->setContenido("Hola Mundo php mvc");
        
        //Vista
        require_once "views/nota/listar.php";


    }

    public function crear(){

    }
    public function borrar(){

    }
}


?>