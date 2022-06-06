<?php
    require '../Conexion.php';
    
    $id=$_POST['id'];
    
    $sql= "SELECT r.id_regSus,r.inicio_sus,u.nom_usu,u.ape_usu,d.ciclo,p.nom_prov, p.precio,c.nom_cate, rec.tiempo_rec,m.nombre_mon FROM registrosus r
                INNER JOIN proveedores p ON r.id_prov=p.id_prov
                INNER JOIN categoria c ON p.id_cate=c.id_cate
                INNER JOIN usuario u ON r.id_usu=u.id_usu
                INNER JOIN duracion d ON r.id_dura=d.id_dura
                INNER JOIN recordatorio rec ON r.id_rec=rec.id_rec
                INNER JOIN moneda m ON r.id_mon=m.id_mon
                WHERE r.id_regSus='$id'";

    $result=mysqli_query($conexion,$sql);
    while( $row = mysqli_fetch_assoc($result)){
        // $nombre = $row['nom_usu'];
        // $ape=$row['ape_usu'];
        // $usuario= $nombre.' '.$ape;
        $tabla='
                <tr>
                    <td>'.$row['id_regSus'].'</td>
                    <td>'.$row['nom_prov'].'</td>
                    <td>'.$row['nom_cate'].'</td>
                    <td>'.$row['inicio_sus'].'</td>
                    <td>'.$row['ciclo'].'</td>
                    <td>'.$row['tiempo_rec'].'</td>
                    <td>'.$row['precio'].'</td>
                    <td>'.$row['nombre_mon'].'</td>   
                    
                </tr>';
        echo $tabla;
    }
?>