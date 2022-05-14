<?php   
    session_start();

    if(!$_SESSION['user']){
        header('location: index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosProveedores.css">
    <title>Lista de Proveedores</title>
</head>
<body background="Imagenes">
    <?php
        require_once('Layouts/nav.php');
    ?>
    <div class="container">
        <div class="form-registro mt-3">
            <form action="" method="POST" id="inicioSesion">
                <h2 class="tittle">Registrar Proveedor</h2>
                <div class="container-inputs">         
                    <input type="id" name="txt_id" placeholder="Id" required>
                    <input type="name" name="txt_name" placeholder="Ingresar Proveedor" required>
                    <input type="text" name="txt_direccion" placeholder="Ingresar Dirección" required>
                    <input type="email" name="txt_usuario" placeholder="Ingresar Correo" required>
                    <button type="submit" class="botons" id="btn_ingresar">Listar Proveedor</button>
                </div>
            </form>
        </div> 
        <section id="contenedor">
            
            <h3 class="mt-3">Lista de Proveedores</h3>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Proveedor</th>
                    <th>Dirección</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
                <tr>
                    <td>011</td>
                    <td>Jorge Luis</td>
                    <td>Las Malvinas</td>
                    <td>jluis1983@gmail.com</td>
                    <td>
                        <a class="link_edit" href="">Editar</a>
                        |
                        <a class="link_delete" href="">Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <td>011</td>
                    <td>Jorge Luis</td>
                    <td>Las Malvinas</td>
                    <td>jluis1983@gmail.com</td>
                    <td>
                        <a class="link_edit" href="">Editar</a>
                        |
                        <a class="link_delete" href="">Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <td>011</td>
                    <td>Jorge Luis</td>
                    <td>Las Malvinas</td>
                    <td>jluis1983@gmail.com</td>
                    <td>
                        <a class="link_edit" href="">Editar</a>
                        |
                        <a class="link_delete" href="">Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <td>011</td>
                    <td>Jorge Luis</td>
                    <td>Las Malvinas</td>
                    <td>jluis1983@gmail.com</td>
                    <td>
                        <a class="link_edit" href="">Editar</a>
                        |
                        <a class="link_delete" href="">Eliminar</a>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>