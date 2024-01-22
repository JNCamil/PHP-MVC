<h1>Bienvenido</h1>
<?php 

require_once "controllers/usuario.php";
$controlador = new UsuarioController();

//Para hacerlo manual:
// $controlador->mostrarTodos();
// $controlador->crear();

//Para hacerlo dinámico:
if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
    $action = $_GET['action'];

    $controlador->$action();
}else{
    echo "La página no existe";
}

/*
 la función method_exists se utiliza para comprobar si un método específico está definido en una clase o si existe en un objeto dado. 
 Esta función toma dos parámetros: 
 el primer parámetro es el nombre de la clase o un objeto, y el segundo parámetro es el nombre del método que se desea verificar.*/
?>