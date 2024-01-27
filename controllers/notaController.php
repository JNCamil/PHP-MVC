<?php 

class NotaController{
    public function listar(){
        //Modelo
        require_once "models/nota.php";

        //Lógica acción controlador
        $nota = new Nota();
       // $nota->setTitulo("Nota número1");
       // $nota->setDescripcion("Hola Mundo php mvc");
        $notas=$nota->conseguirTodos("notas");
        
        //Vista
        require_once "views/nota/listar.php";


    }

    public function crear(){
         //Modelo
         require_once "models/nota.php";

         $nota=new Nota();
         $nota->setUsuario_id(1);
         $nota->setTitulo("Nota desde PHP MVC");
         $nota->setDescripcion("Descripcion de mi nota");
         $nota->guardar();

         //Posibles errores:
         // echo $nota->db->error;
         // die();

         header("Location:index.php?controller=Nota&action=listar");

    }
    public function borrar(){

    }
}


?>