<?php
    $conexion = new mysqli("localhost", "root", NULL, "musa");
   
    if($conexion){
        echo "exito";
    } else {
        echo "Diantres";
    }
?>