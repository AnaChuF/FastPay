<?php

require '../Conexion.php';
/*
$reprov=$_POST['rol'];
$categoria=$_POST['categoria'];
$proveedor=$_POST['proveedor'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$precio=$_POST['precio'];
echo $precio;*/
    if (isset($_POST['agregar']) && $_POST ['agregar'] == "categoria"){

        $otcat=$_POST['categoria'];
        $sql= "INSERT INTO categoria(nom_cate)VALUES('$otcat')";
        if($result=mysqli_query($conexion, $sql)){
            echo $result;
        }
        

    }else if(isset($_POST['insertar']) && $_POST ['insertar'] == "proveedor"){
        
        
        $rol=$_POST['rol'];
        $cat=$_POST['categoria'];
        $proveedor=$_POST['proveedor'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $precio=$_POST['precio'];

            if ($proveedor == '') {
                $datos = $nombre." ".$apellido;
            }else{
                $datos = $proveedor;
            }

        $sql= "INSERT INTO proveedores(tipo_prov,nom_prov,precio,id_cate)VALUES('$rol', '$datos', '$precio', '$cat')";

        if($result=mysqli_query($conexion, $sql)){
            echo $result;
        }

    }else if(isset($_POST['editar']) && $_POST['editar']=='proveedor'){
        $id=$_POST['id'];
        $sql="SELECT * FROM proveedores INNER JOIN categoria ON proveedores.id_cate = categoria.id_cate WHERE id_prov='$id'";
            
        if($result=mysqli_query($conexion,$sql)){
            $res=mysqli_fetch_assoc($result);
            echo json_encode($res);
        }
        
        
    }else if(isset($_POST['actualizar']) && $_POST['actualizar']=='proveedor'){
        $id=$_POST['id'];
        $rol=$_POST['rol'];
        $cat=$_POST['categoria'];
        $nombres=$_POST['nombres'];
        $precio=$_POST['precio'];

        $sql="UPDATE proveedores SET tipo_prov='$rol',nom_prov='$nombres',precio='$precio',id_cate='$cat' WHERE id_prov='$id'";
        $result=mysqli_query($conexion,$sql);

        echo $result;
        
    }else if (isset($_POST['eliminar']) && $_POST['eliminar']=='proveedor') {
        $id=$_POST['id'];
        $sql="DELETE FROM proveedores WHERE id_prov='$id'";
        if($result=mysqli_query($conexion,$sql)){
            echo $result;
        }
    }
    /**/

    

?>