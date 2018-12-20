<?php

    // Levanto la frase que tipeó el usuario
    $frase = $_POST['frase_creada'];

    // Me conecto a la bd para incluirla
    include("conexion.php");
    $insertar = "INSERT TO ejercicio_cadaver_usuario
                VALUES (
                    NULL,
                    NULL,
                    NULL,

                )",

    $ejecutar = mysqli_query(
        $conexion,
        $insertar
    );

    if(ejecutar){
        echo "Entrada exitosa. Agregar siguiente frase";
    } else {
        echo "Error";
    }
?>

