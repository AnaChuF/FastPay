<?php

require '../Conexion.php';

$id=$_POST['proveedor'];

$sql= "SELECT * FROM proveedores INNER JOIN categoria ON proveedores.id_cate = categoria.id_cate WHERE proveedores.id_prov = '$id'";

if($result = mysqli_query($conexion,$sql)){
    if(mysqli_num_rows($result)>0){
        $date = mysqli_fetch_assoc($result);
        echo json_encode($date);
    }

}

?>