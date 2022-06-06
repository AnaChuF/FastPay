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
    <script src="https://kit.fontawesome.com/0abff36f27.js" crossorigin="anonymous"></script>

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
            <form id="registrarProveedor">
                <h2 class="tittle">Registrar Proveedor</h2>
                <div class="container-inputs">
                    <label for="exampleInputEmail1" class="form-label">CATEGORIA:</label>
                    <select class="select-from" aria-label="Default select example" name="categoria" id="categoria" required>
                        
                    </select>
                    <!--Botón modal agregar categorias-->
                    
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarCategoria">Agregar Otras Categoria</button>

                    <select class="select-from" aria-label="Default select example" name="rol" id="rol" required>
                        <option value="">Tipo de Proveedor</option>
                        <option value="Persona Juridica">Persona Juridica</option>
                        <option value="Empresa">Empresa</option>
                    </select>
                    <input type="text" id="proveedor" name="proveedor" placeholder="Ingresar Proveedor">
                    <input type="text" id="nombre" name="nombre" placeholder="Ingresar Nombre Proveedor">
                    <input type="text" id="apellido" name="apellido" placeholder="Ingresar Apellido Proveedor">
                    <input type="text" id="precio" name="precio" placeholder="Ingresar Precio" required>
                    <button type="button" class="botons" value="prov" name="btnproveedor" id="btn_ingresar" onclick="agregarProveedor()">Listar Proveedor</button>
                </div>
            </form>
        </div> 
        <section id="contenedor">
            <h3 class="mt-3">Lista de Proveedores</h3>
            <table id="tablaProveedores">
                <thead>
                    <tr>
                        <th>Tipo Proveedor</th>
                        <th>Categoria</th>
                        <th>Proveedor</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </section>

        <!--Modal Agregar Categorias-->
        <div class="modal fade" id="agregarCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="modalCategoria">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar Categoria</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="control" id="otcat" name="otcat" placeholder="OTRAS CATEGORIAS">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" id="btnregistrar" value="cate" name="btnregistrar" onclick="agregarCate()" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Editar Proveedores-->
        
        <div class="modal fade" id="ModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Proveedor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="actualizar">
                            <div class="container-inputs">
                                <h5 class="form-cate">CATEGORIA:</h5>
                                <input type="text" name="txt_id" id="txt_id" value="txt_id" hidden>
                                <select class="select-from" aria-label="Default select example" name="txt_categoria" id="txt_categoria" required>
                                    <option value="">SELECCIONAR</option>
                                    <?php
                                        $sql="SELECT * FROM categoria";
                                        $result=mysqli_query($conexion,$sql);
                                        if(mysqli_num_rows($result)>0){
                                            foreach ($result as $res) {
                                                $id=$res['id_prov'];
                                    ?>
                                        <option value="<?php echo $res['id_cate']?>"><?php echo $res['nom_cate']?></option>
                                    <?php
                                            }
                                        }
                                    ?>
                                </select>

                                <select class="select-from" aria-label="Default select example" name="txt_rol" id="txt_rol" required>
                                    <option value="">Tipo de Proveedor</option>
                                    <option value="Persona Juridica">Persona Juridica</option>
                                    <option value="Empresa">Empresa</option>
                                </select>

                                <!--<input type="text" id="txt_proveedor" name="txt_proveedor" placeholder="Ingresar Proveedor">-->
                                <input type="text" id="txt_nombres" name="txt_nombres" placeholder="Ingresar Nombre Empresa o Persona">
                                <!--<input type="text" id="txt_nombre" name="txt_nombre" placeholder="Ingresar Nombre Proveedor">
                                <input type="text" id="txt_apellido" name="txt_apellido" placeholder="Ingresar Apellido Proveedor">-->
                                <input type="text" id="txt_precio" name="txt_precio" placeholder="Ingresar Precio" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" onclick="actualizarProveedor()">Editar Proveedor</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/proveedores.js"></script>
    
</body>
</html>