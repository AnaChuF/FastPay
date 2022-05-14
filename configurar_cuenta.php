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
    <title>Configuracion de Cuenta</title>
</head>
<body>
    
    <?php
        require_once('Layouts/nav.php');
    ?>
        <div class= "container">
            <p>                 
            <h4>Configuracion de Cuenta</h4>
            <form>
                <div class="row mb-3">
                    <label for="inputName3" class="col-sm-2 col-form-label">Nombres</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="inputName3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputUserName3" class="col-sm-2 col-form-label">Nombre de Usuario</label>
                    <div class="col-sm-10">
                        <input type="username" class="form-control" id="inputUserName3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPhone3" class="col-sm-2 col-form-label">Telefono</label>
                    <div class="col-sm-10">
                        <input type="phone" class="form-control" id="inputPhone3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
            </p> 
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>