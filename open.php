<?php

    $conexion = new mysqli("localhost", "id20310606_id217212_registro", "ID217212_registro", "personas");
    if($conexion){
        echo "conexion exitosa";
    } else{
        echo "fallo la conexion";
    }

?>