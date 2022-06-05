<?php 

    session_start();

    require 'Conexion.php';
        
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosDatosSub.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/0abff36f27.js" crossorigin="anonymous"></script>
    <title>Datos de Suscripcion</title>
</head>

<body>
    <?php
        require_once('Layouts/nav.php');
    ?>
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-6">
            <div class="form-registrar rounded-3 text-white p-4">
                <form id="dataSus">
                    <p>
                        <h3>REGISTRO DE SUSCRIPCION</h3>
                    </p>
                    <fieldset disabled>
                        <div class="mb-3">
                            <p>
                            <input id="id" value="<?php echo $user->id_usu?>" hidden>
                            <input type="text" id="user" name="user" class="form-control form-control-sm"
                                value="<?php echo $user->nom_usu.' '.$user ->  ape_usu; ?>">
                            </p>
                        </div>
                    </fieldset>
                    <select class="form-select form-select-sm mb-3" aria-label="Default select example" name="proveedor"
                    id="proveedor">
                    <option value="" selected>PROVEEDOR</option>
                    <?php
                        $sql="SELECT * FROM proveedores";
                        $result=mysqli_query($conexion,$sql);
                        if(mysqli_num_rows($result)>0){
                            foreach ($result as $res) {                      
                        ?>
                    <option value="<?php echo $res['id_prov']?>"><?php echo $res['nom_prov']?></option>
                    <?php
                            }
                        }
                        ?>
                    </select>
                    <fieldset disabled>
                        <p>
                            <input id="categoria" name="categoria" class="form-control form-control-sm" placeholder="CATEGORIA">
                        </p>
                    </fieldset>
                    <p>
                        <a class="link-light" href="lista_proveedores.php">Registar proveedores</a>
                    </p>
                        <label for="exampleInputEmail1" class="form-label">INICIO DE SUSCRIPCION :</label>
                    <div class="input-group input-group-sm mb-3">
                        <!--<label for="exampleInputPassword1" class="form-label">Password</label>-->
                        <input type="date" class="form-control" name="fecha" id="fecha">
                    </div>
                    <select class="form-select form-select-sm mb-3" aria-label="Default select example" name="ciclo" id="ciclo">
                    <option selected>SELECCIONAR CICLO</option>
                    <?php
                        $sql="SELECT * FROM duracion";
                        $result=mysqli_query($conexion,$sql);
                        if(mysqli_num_rows($result)>0){
                        foreach ($result as $res) {                      
                    ?>
                    <option value="<?php echo $res['id_dura']?>"><?php echo $res['ciclo']?></option>
                    <?php
                            }
                        }
                    ?>
                    </select>
                    <div class="mb-3">
                    <label for="rol">RECORDATORIO :</label>
                        <select class="form-select form-select-sm" aria-label="Default select example" name="recordatorio"
                        id="recordatorio">
                        <option selected>SELECCIONAR</option>
                        <?php
                        $sql="SELECT * FROM recordatorio";
                        $result=mysqli_query($conexion,$sql);
                        if(mysqli_num_rows($result)>0){
                        foreach ($result as $res) {                      
                        ?>
                        <option value="<?php echo $res['id_rec']?>"><?php echo $res['tiempo_rec']?></option>
                        <?php
                            }
                        }
                        ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="rol">TIPO DE MONEDA :</label>
                        <select class="form-select form-select-sm" aria-label="Default select example" name="moneda" id="moneda">
                        <option selected>SELECCIONAR</option>
                        <?php
                        $sql="SELECT * FROM moneda";
                        $result=mysqli_query($conexion,$sql);
                        if(mysqli_num_rows($result)>0){
                        foreach ($result as $res) {                      
                        ?>
                        <option value="<?php echo $res['id_mon']?>"><?php echo $res['nombre_mon']?></option>
                        <?php
                            }
                        }
                        ?>
                        </select>
                    </div>
                    <fieldset disabled>
                        <p>
                            <input id="preciosus" name="preciosus" class="form-control form-control-sm" placeholder="PRECIO">
                        </p>
                    </fieldset>
                    <button type="button" id="btn-registrar" class="btn btn-primary"
                    onclick="agregarSuscripciones()">Registrar</button>
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="tabla">
                <h4 class="mt-3">LISTADO DE SUSCRIPCION</h4>
                <table id="tablaRegistros">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">PROVEEDOR</th>
                        <th scope="col">CATEGORIA</th>
                        <th scope="col">INICIO DE SUSCRIPCION</th>
                        <th scope="col">PRECIO</th>
                        <th scope="col">DETALLES</th>
                        <th scope="col" colspan="2">ACCIONES</th>
                        </tr>
                    </thead>
                <tbody>

                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

  <!-- Modal Para Tabla Completa-->
<div class="modal fade" id="modalDetalles" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">LISTA DE SUSCRIPCIONES COMPLETA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-sm-6">
                    <div class="tabla">
                        <table id="tableSuscripcion">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">PROVEEDOR</th>
                                    <th scope="col">CATEGORIA</th>
                                    <th scope="col">INICIO DE SUSCRIPCION</th>
                                    <th scope="col">CICLO</th>
                                    <th scope="col">RECORDATORIO</th>
                                    <th scope="col">PRECIO</th>
                                    <th scope="col">TIPO DE MONEDA</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <!-- <button type="button" id="btnregistrar" value="cate" name="btnregistrar" onclick="agregarCategoria()" class="btn btn-primary">Actualizar</button> -->
            </div>
        </div>
    </div>
</div>

  <!-- Modal Editar Registro de Suscripcion-->

  <div class="modal fade" id="ModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Registro de Suscripción</h5>
                <button on type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <form id="registerSus">
            <fieldset disabled>
                <div class="mb-3">
                    <p>
                        <input id="regsus" value="regsus" hidden>
                        <input type="text" id="user" name="user" class="form-control form-control-sm"
                        value="<?php echo $user->nom_usu.' '.$user ->  ape_usu; ?>">
                    </p>
                </div>
            </fieldset>
            <select class="form-select form-select-sm mb-3" aria-label="Default select example" name="txt_proveedor"
                id="txt_proveedor">
                <option value="" selected>PROVEEDOR</option>
                    <?php
                        $sql="SELECT * FROM proveedores";
                        $result=mysqli_query($conexion,$sql);
                        if(mysqli_num_rows($result)>0){
                        foreach ($result as $res){                    
                    ?>
                <option value="<?php echo $res['id_prov']?>"><?php echo $res['nom_prov']?>
                </option>
                    <?php
                            }
                        }
                    ?>
            </select>
            <fieldset disabled>
                <p>
                    <input id="txt_categoria" name="txt_categoria" class="form-control form-control-sm"
                    placeholder="CATEGORIA">
                </p>
            </fieldset>
            <p>
                <a class="link-light" href="lista_proveedores.php">Registar proveedores
                </a>
            </p>
            <label for="exampleInputEmail1" class="form-label">INICIO DE SUSCRIPCION :
            </label>
            <div class="input-group input-group-sm mb-3">
                <!--<label for="exampleInputPassword1" class="form-label">Password</label>-->
                <input type="date" class="form-control" name="txt_inicio" id="txt_inicio">
            </div>
            <select class="form-select form-select-sm mb-3" aria-label="Default select example" name="txt_ciclo"
                id="txt_ciclo">
                <option selected>SELECCIONAR CICLO</option>
                <?php
                    $sql="SELECT * FROM duracion";
                    $result=mysqli_query($conexion,$sql);
                    if(mysqli_num_rows($result)>0){
                    foreach ($result as $res) {                      
                ?>
                <option value="<?php echo $res['id_dura']?>"><?php echo $res['ciclo']?>
                </option>
                <?php
                        }
                    }
                ?>
            </select>
            <div class="mb-3">
                <label for="rol">RECORDATORIO :</label>
                <select class="form-select form-select-sm" aria-label="Default select example" name="txt_recordatorio"
                id="txt_recordatorio">
                <option selected>SELECCIONAR</option>
                <?php
                    $sql="SELECT * FROM recordatorio";
                    $result=mysqli_query($conexion,$sql);
                    if(mysqli_num_rows($result)>0){
                    foreach ($result as $res) {                      
                ?>
                <option value="<?php echo $res['id_rec']?>"><?php echo $res['tiempo_rec']?></option>
                <?php
                        }
                    }
                ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="rol">TIPO DE MONEDA :</label>
                <select class="form-select form-select-sm" aria-label="Default select example" name="txt_moneda"
                id="txt_moneda">
            <option selected>SELECCIONAR</option>
                <?php
                    $sql="SELECT * FROM moneda";
                    $result=mysqli_query($conexion,$sql);
                    if(mysqli_num_rows($result)>0){
                    foreach ($result as $res) {                      
                ?>
                <option value="<?php echo $res['id_mon']?>"><?php echo $res['nombre_mon']?></option>
                <?php
                        }
                    }
                ?>
                </select>
            </div>
                <fieldset disabled>
                    <p>
                        <input id="txt_precio" name="txt_precio" class="form-control form-control-sm" placeholder="PRECIO">
                    </p>
                </fieldset>
            </form>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"                         data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" onclick="actualizarSuscripcion()">Editar Registro</button>
            </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/suscripcion.js"></script>
</body>

</html>