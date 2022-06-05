<?php 
    session_start();
    require '../Conexion.php';

    if(isset($_POST['insertar']) && $_POST ['insertar'] == "suscripcion"){

        $usuario = $_POST["usuario"];
        $proveedor=$_POST['proveedor'];
        $inicio=$_POST['inicio'];
        $ciclo=$_POST['ciclo'];
        $recordatorio=$_POST['recordatorio'];
        $moneda=$_POST['moneda'];

        $sql= "INSERT INTO registrosus(inicio_sus,id_usu,id_prov,id_dura,id_rec,id_mon)
        VALUES('$inicio','$usuario','$proveedor','$ciclo','$recordatorio','$moneda')";

        if($result=mysqli_query($conexion,$sql)){
            echo $result;

        }
            
        
    }else if (isset($_POST['editar'])&& $_POST ['editar'] == "registro"){
        $id=$_POST['id'];
        $sql= "SELECT * FROM registrosus r
                INNER JOIN proveedores p ON r.id_prov=p.id_prov
                INNER JOIN categoria c ON p.id_cate=c.id_cate
                INNER JOIN usuario u ON r.id_usu=u.id_usu
                INNER JOIN duracion d ON r.id_dura=d.id_dura
                INNER JOIN recordatorio rec ON r.id_rec=rec.id_rec
                INNER JOIN moneda m ON r.id_mon=m.id_mon
                WHERE r.id_regSus='$id'";

        if($result=mysqli_query($conexion,$sql)){
            $res=mysqli_fetch_assoc($result);
            echo json_encode($res);
        }
    }else if (isset($_POST['actualizar'])&& $_POST ['actualizar'] == "registro"){
        $id=$_POST['id'];
        $proveedor=$_POST['prov'];
        $inicio=$_POST['inicio'];
        $ciclo=$_POST['ciclo'];
        $recordatorio=$_POST['rec'];
        $tipomon=$_POST['mon'];

        $sql= "UPDATE registrosus SET inicio_sus='$inicio' ,id_prov='$proveedor', id_dura='$ciclo',
                id_rec='$recordatorio',id_mon='$tipomon'
                WHERE id_regSus='$id'";

        $result=mysqli_query($conexion,$sql);
        echo $result;
   
     }else if (isset($_POST['eliminar'])&& $_POST ['eliminar'] == "registro"){
        $id=$_POST['id'];
        $sql="DELETE FROM registrosus WHERE id_regSus='$id'";
        $result=mysqli_query($conexion,$sql);
        echo $result;
     }
           
?>