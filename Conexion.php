<?php

    $user="root";
    $pass="";
    $server = "localhost";
    $db="fastpay";

    $conexion= new mysqli($server, $user, $pass, $db);

    if($conexion->connect_errno){
        die("La conexion ha fallado".$conexion->connect_errno);
    }


?>