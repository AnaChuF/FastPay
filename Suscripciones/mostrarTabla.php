<?php
    require '../Conexion.php';
    
    $id=$_POST['id'];

    $sql= "SELECT r.id_regSus,r.inicio_sus,u.nom_usu,u.ape_usu,p.nom_prov, p.precio ,c.nom_cate FROM registrosus r
            INNER JOIN proveedores p ON r.id_prov=p.id_prov
            INNER JOIN categoria c ON p.id_cate=c.id_cate
            INNER JOIN usuario u ON r.id_usu=u.id_usu
            WHERE u.id_usu='$id'";

    $result=mysqli_query($conexion,$sql);
    // $row = mysqli_fetch_assoc($result);
    // var_dump($row);
    while( $row = mysqli_fetch_assoc($result)){
        $nombre = $row['nom_usu'];
        $ape=$row['ape_usu'];
        $usuario= $nombre.' '.$ape;
        $tabla='
                <tr>
                    <td>'.$row['id_regSus'].'</td>
                    <td>'.$row['nom_prov'].'</td>
                    <td>'.$row['nom_cate'].'</td>
                    <td>'.$row['inicio_sus'].'</td>   
                    <td>'.$row['precio'].'</td>
                    <td>
                        <div class="col text-center">
                            <button type="button" class="btn btn-outline-dark" id="mas" 
                            data-bs-toggle="modal" data-bs-target="#modalDetalles" onclick="detallesTabla('.$row['id_regSus'].')"><i class="fa-solid fa-ellipsis"></i></button>
                        </div>
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-primary" id="editar" onclick="editarSuscripcion('.$row['id_regSus'].')" 
                        data-bs-toggle="modal" data-bs-target="#ModalEditar"><i class="fa-solid fa-pencil"></i></button>
                        <button type="button" class="btn btn-outline-danger" id="eliminar" onclick="eliminarSuscripcion('.$row['id_regSus'].')"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>';
        echo $tabla;
    }
?>