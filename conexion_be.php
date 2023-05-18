<?php 

$conexion=misqli_connect("localhost8080", "root", "123456", "usuarios");
if($conexion){
    echo"conectado exitosamente a la base de datos";
}else{
    echo"no se ha podido conectar a la base de datos";
}

?>