<?php 
//Se le pasa el nombre de la clase
function autocargar($classname){

    include "controllers/" . $classname . ".php";
}

//Esta función utiliza la función de arriba para buscar todas las clases del directorio que le indique
spl_autoload_register("autocargar");

?>