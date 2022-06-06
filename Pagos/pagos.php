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

    }else if (isset($_POST['busqueda']) && $_POST['busqueda']=='categoria') {
        $categoria=$_POST['categoria'];

        $sql="SELECT * FROM pagos p 
            INNER JOIN tipo_pago t ON p.id_tipopago=t.id_tipopago 
            INNER JOIN comprobante_pago com ON p.id_comprobantepago=com.id_comprobantepago 
            INNER JOIN detalles_pagos d on p.id_detallespagos=d.id_detallespagos 
            INNER JOIN registrosus r on r.id_regSus=p.id_regSus 
            INNER JOIN proveedores prov on prov.id_prov=r.id_prov 
            INNER JOIN categoria c on prov.id_cate=c.id_cate WHERE c.nom_cate='$categoria'";

        if($result=mysqli_query($conexion,$sql)){
            if(mysqli_num_rows($result)>0){
                $total=0;
                while ($row=mysqli_fetch_assoc($result)) {
                    
                    $tabla='
                            <tr>
                                <td>'.$row['nom_cate'].'</td>
                                <td>'.$row['nom_prov'].'</td>
                                <td>'.$row['igv_pago'].'</td>
                                <td>'.$row['importe_pago'].'</td>
                                <td>'.$row['inicio_sus'].'</td>
                                <td>'.$row['subtotal_pago'].'</td>
                                <td>
                                    <button type="button" onclick="mostrarAlertas('.$row['id_pagos'].')"><i class="fa-solid fa-circle-info"></i></button>
                                </td>
                            </tr>';
                    $total=$total+$row['subtotal_pago'];       
                    echo $tabla;
                }
                $table='
                        <tr>
                            <th scope="col" colspan="5">Total</th>
                            <th scope="col">'.$total.'</th>
                        </tr>';
                echo $table;
            }else{
                $tabla='
                        <tr>
                            <td colspan="7">NO HAY REGISTROS</td>
                        </tr>';
                echo $tabla;
            }
            
        }
    }elseif (isset($_POST['mostrar']) && $_POST['mostrar']=='datos') {
        $id=$_POST['id'];

        $sql="SELECT * FROM pagos p 
            INNER JOIN tipo_pago t ON p.id_tipopago=t.id_tipopago 
            INNER JOIN comprobante_pago com ON p.id_comprobantepago=com.id_comprobantepago 
            INNER JOIN detalles_pagos d on p.id_detallespagos=d.id_detallespagos 
            INNER JOIN registrosus r on r.id_regSus=p.id_regSus 
            INNER JOIN proveedores prov on prov.id_prov=r.id_prov 
            INNER JOIN categoria c on prov.id_cate=c.id_cate WHERE p.id_pagos='$id'";

        if($result=mysqli_query($conexion,$sql)){
            while($row=mysqli_fetch_assoc($result)){
                echo json_encode($row);
            }
            
        }
        
    }








?>