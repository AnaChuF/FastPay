<?php

require "../Conexion.php";

    $sql="SELECT * FROM categoria";
    $result=mysqli_query($conexion,$sql);
    $data='<option value="">SELECCIONAR</option>';
    while($row=mysqli_fetch_assoc($result)){
        
        $data.='
            <option value="'.$row['id_cate'].'">'.$row['nom_cate'].'</option>';
        //echo $data;
    }
                                
    echo $data;
    //echo ;

?>