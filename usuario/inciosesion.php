<?php

    include "../Conexion.php";

    session_start();

    $email=$_POST['txt_usuario'];
    $clave=$_POST['txt_clave'];


    $sql="SELECT * FROM usuario WHERE corr_usu='$email' AND con_usu='$clave'";
    $result=mysqli_query($conexion,$sql);

    if(mysqli_num_rows($result)>0){
        foreach($result as $res){
            $_SESSION['user']= $res['nomu_usu'];
            header('location: ../inicio.php');
        }
    }else{
        echo 'No existe';
    }



?>