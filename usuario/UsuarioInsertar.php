<?php

    include "../Conexion.php";

    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $usuario = $_POST["usuario"];
    $phone = $_POST["phone"];
    $dni = $_POST["dni"];
    $clave = $_POST["clave"];
    $clave2 = $_POST["clave2"];

    $sql = "INSERT INTO usuario(nom_usu, ape_usu, corr_usu, con_usu, nomu_usu, dni_usu, tel_usu) VALUES ('$nombres', '$apellidos', '$correo','$clave','$usuario','$dni','$phone')";
    $result=mysqli_query($conexion, $sql);
    if ($result) {
        echo $result;
    }
    
?>