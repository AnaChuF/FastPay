<?php

    require "../Conexion.php";


    $sql="SELECT * FROM pagos p 
        INNER JOIN tipo_pago t ON p.id_tipopago=t.id_tipopago 
        INNER JOIN comprobante_pago com ON p.id_comprobantepago=com.id_comprobantepago 
        INNER JOIN detalles_pagos d on p.id_detallespagos=d.id_detallespagos 
        INNER JOIN registrosus r on r.id_regSus=p.id_regSus 
        INNER JOIN proveedores prov on prov.id_prov=r.id_prov 
        INNER JOIN categoria c on prov.id_cate=c.id_cate";
    if($result=mysqli_query($conexion,$sql)){
        $total=0;
        while ($row=mysqli_fetch_assoc($result)) {
            
            $tabla='
                    <tr>
                        <td>'.$row['nom_cate'].'</td>
                        <td>'.$row['nom_prov'].'</td>
                        <td>'.$row['igv_pago'].'</td>
                        <td>'.$row['importe_pago'].'</td>
                        <td>'.$row['tipo_de_pago'].'</td>
                        <td>'.$row['tipo_comprobantepago'].'</td>
                        <td>'.$row['subtotal_pago'].'</td>
                        <td><button type="button" class="btn btn-outline-secondary" onclick="mostrarAlertas('.$row['id_pagos'].')"><i class="fa-solid fa-circle-info"></i></button></td>
                    </tr>';
            $total=$total+$row['subtotal_pago'];
            
            echo $tabla;
        }
            $table.='
                    <tr>
                        <th scope="col" colspan="6">Total</th>
                        <th scope="col">'.$total.'</th>
                    </tr>';
        echo $table;
    }






?>