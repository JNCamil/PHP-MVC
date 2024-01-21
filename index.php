<h1>Bienvenido</h1>
<?php 

require_once "controllers/usuario.php";
$controlador = new UsuarioController();

//Para hacerlo manual:
// $controlador->mostrarTodos();
// $controlador->crear();

//Para hacerlo dinámico:
if($_GET['action'] && method_exists($controlador, $_GET['action'])){
    $action = $_GET['action'];

    $controlador->$action();
}


?>