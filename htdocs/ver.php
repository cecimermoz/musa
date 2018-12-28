<?php

    include('conexion.php');
    $id = $_POST['id'];
    $recopilar = "SELECT `frase`, `frase_creada`
    FROM `ejercicio_cadaver_usuario` 
    WHERE id_usuario = $id";

    $ejecutar = mysqli_query(
        $conexion,
        $recopilar
    );

    if($ejecutar === false){
        echo "Error";
    } else {
        while($reg = mysqli_fetch_array($ejecutar)){
        echo $reg["frase"];
        echo "<br>" . $reg["frase_creada"];
        }

    }




?>