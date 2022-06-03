<?php

require '../Conexion.php';


    $sql="SELECT * FROM proveedores INNER JOIN categoria ON proveedores.id_cate=categoria.id_cate";
    $result=mysqli_query($conexion,$sql);
    while( $row = mysqli_fetch_array($result)){
        $tabla='
                <tr>
                    <td>'.$row['tipo_prov'].'</td>
                    <td>'.$row['nom_cate'].'</td>   
                    <td>'.$row['nom_prov'].'</td>
                    <td>'.$row['precio'].'</td>
                    <td>
                        <button type="button" class="btn btn-primary" id="editar" onclick="editarProveedor('.$row['id_prov'].')" data-bs-toggle="modal" data-bs-target="#ModalEditar"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button type="button" class="btn btn-danger" id="eliminar" onclick="eliminarProveedor('.$row['id_prov'].')"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>';
        echo $tabla;
    }
    
    
 


?>