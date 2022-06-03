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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuracion de Cuenta</title>
</head>
<body>
    <?php
        require_once('Layouts/nav.php');
    ?>
        <div class= "container">
            <p>                 
            <h4 class="mb-4">Configuracion de Cuenta</h4>    
            <form id="">          
                <div class="row mb-3">
                    <label for="inputName3" class="col-sm-2 col-form-label">Nombres</label>
                    <div class="col-sm-10">
                        <input type="text" name="id" id="id" value="<?php echo $user->id_usu; ?>" hidden>
                        <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $user->nom_usu; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputUserName3" class="col-sm-2 col-form-label">Nombre de Usuario</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombreUsuario" id="nombreUsuario" value="<?php echo $user->nomu_usu; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPhone3" class="col-sm-2 col-form-label">Telefono</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $user->tel_usu; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $user->corr_usu; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="clave" id="clave" value="<?php echo $user->con_usu; ?>" required>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" onclick="actualizarDatos()">Actualizar Datos </button>
            </form>
            </p> 
        </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/usuarios.js"></script>

</body>
</html>