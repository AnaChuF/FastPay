<?php
    session_start();

    if(!$_SESSION['user']){
        header('location: index.php');
    }

    require 'Conexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <form action="Proveedores/proveedor.php" method="POST" id="inicioSesion">
                <h2 class="tittle">Registrar Proveedor</h2>
                <div class="container-inputs">
                <label for="exampleInputEmail1" class="form-label">CATEGORIA:</label>
                <select class="select-from" aria-label="Default select example" name="categoria" id="categoria" required>
                    <option value="">SELECCIONAR</option>
                    <?php
                        $sql="SELECT * FROM categoria";
                        $result=mysqli_query($conexion,$sql);
                        if(mysqli_num_rows($result)>0){
                            foreach ($result as $res) {                      
                    ?>
                        <option value="<?php $res['id_cate']?>"><?php echo $res['nom_cate']?></option>
                    <?php
                        }
                    }
                    ?>
                        <option value="otros">OTRAS CATEGORIAS</option>
                </select>
                <input type="text" id="otcat" name="otcat" placeholder="OTRAS CATEGORIAS">
                <select class="select-from" aria-label="Default select example" name="rol" id="rol" required>
                  <option value="">Tipo de Proveedor</option>
                  <option value="Persona Juridica">Persona Juridica</option>
                  <option value="Empresa">Empresa</option>
                </select>
                    <input type="text" id="proveedor" name="txt_proveedor" placeholder="Ingresar Proveedor">
                    <input type="text" id="nombre" name="txt_nombre" placeholder="Ingresar Nombre Proveedor">
                    <input type="text" id="apellido" name="txt_apellido" placeholder="Ingresar Apellido Proveedor">
                    <input type="text" id="precio" name="txt_precio" placeholder="Ingresar Precio" required>
                    <button type="submit" class="botons" id="btn_ingresar">Listar Proveedor</button>
                </div>
            </form>
        </div> 
        <section id="contenedor">
            <h3 class="mt-3">Lista de Proveedores</h3>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Tipo Proveedor</th>
                    <th>Categoria</th>
                    <th>Proveedor</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
                <tr>
                    <td>011</td>
                    <td>Empresa</td>
                    <td>Bebidas</td>
                    <td>Frank Hoyos</td>
                    <td>2.0000.000</td>
                    <td>
                        <a class="link_edit" href="">Editar</a>
                        |
                        <a class="link_delete" href="">Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <td>658</td>
                    <td>Empresa</td>
                    <td>Cable</td>
                    <td>Jeferson Rojas</td>
                    <td>2.0000.000</td>
                    <td>
                        <a class="link_edit" href="">Editar</a>
                        |
                        <a class="link_delete" href="">Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <td>524</td>
                    <td>Empresa</td>
                    <td>Internet</td>
                    <td>Ana Chu</td>
                    <td>2.0000.000</td>
                    <td>
                        <a class="link_edit" href="">Editar</a>
                        |
                        <a class="link_delete" href="">Eliminar</a>
                    </td>
                </tr>
            </table>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/proveedores.js"></script>
</body>
</html>