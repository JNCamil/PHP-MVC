<?php 

class NotaController{
    public function listar(){
        //Modelo
        require_once "modesl/nota.php";
        $nota = new Nota();
        $nota->setNombre("Nota número1");
        $nota->setContenido("Hola Mundo php mvc");


    }

    public function crear(){

    }
    public function borrar(){

    }
}


?>