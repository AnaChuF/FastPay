<?php

    require "../Conexion.php";

    if(isset($_POST['buscar']) && $_POST['buscar']=='registro'){
        $id=$_POST['id'];

        $sql="SELECT * FROM registrosus r INNER JOIN proveedores p ON r.id_prov=p.id_prov 
            INNER JOIN categoria c ON p.id_cate=c.id_cate WHERE id_regSus='$id'";
        if($result=mysqli_query($conexion,$sql)){
            $data=mysqli_fetch_assoc($result);
            echo json_encode($data);
        }

    }else if(isset($_POST['insertar']) && $_POST['insertar']=='registro'){
        $id=$_POST['id'];
        $igv=$_POST['igv'];
        $importe=$_POST['importe'];
        $pago=$_POST['pagototal'];
        $estadoP=$_POST['estadoPago'];
        $tipoPago=$_POST['tipoPago'];
        $comprobante=$_POST['comprobante'];

        $sql="INSERT INTO pagos(igv_pago,importe_pago,subtotal_pago,id_tipopago,id_comprobantepago,id_regSus,id_detallespagos)
            VALUES('$igv','$importe','$pago','$tipoPago','$comprobante','$id','$estadoP')";
        if($result=mysqli_query($conexion,$sql)){
            echo $result;
        }

    }








?>