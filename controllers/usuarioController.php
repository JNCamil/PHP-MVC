<?php 

class UsuarioController{
    public function mostrarTodos(){

        require_once "models/usuario.php";

        $usuario = new Usuario();
        $todosUsuarios = $usuario->conseguirTodos();

        require_once "views/usuarios/mostrar_todos.php";
        

    }

    public function crear(){
        require_once "views/usuarios/crear.php";

    }
}


?>