<?php

session_start();

include "../Conexion.php";

$id=$_POST['id'];
$names=$_POST['nombres'];
$nameUser=$_POST['nombreUsuario'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$pass=$_POST['clave'];

$sql="UPDATE usuario SET nom_usu='$names',corr_usu='$email',con_usu='$pass',nomu_usu='$nameUser',tel_usu='$telefono' WHERE id_usu='$id'";

if (mysqli_query($conexion,$sql)) {
    $ind=session_unset();

    $data=[
        "id_usu"=>$id,
        "nom_usu"=>$names,
        "nomu_usu"=>$nameUser,
        "tel_usu"=>$telefono,
        "corr_usu"=>$email,
        "con_usu"=>$pass
    ];

    /*$consulta="SELECT * FROM usuario WHERE id_usu='$id'";
    $resultado=mysqli_query($conexion,$consulta);
    $data=mysqli_fetch_assoc($resultado);*/

    $_SESSION['user']=json_encode($data);
    echo $_SESSION['user'];
    header('location: ../configurar_cuenta.php');

} else {
    echo "error";

}


?>