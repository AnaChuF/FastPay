<?php   
    session_start();

    if(!$_SESSION['user']){
        header('location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="es">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosDatosSub.css">
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
            <form action="" method="POST">
              <h3>REGISTRO DE SUSCRIPCION</h3>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CATEGORIA :</label>
                <select class="form-select form-select-sm" aria-label="Default select example" name="rol" id="rol">
                  <option selected>SELECCIONAR</option>
                  <option value="1">CABLE</option>
                  <option value="2">TELEFONO</option>
                  <option value="3">INTERNET</option>
                </select>
              </div>
              <div class="input-group input-group-sm mb-3">
                <!--<label for="exampleInputPassword1" class="form-label">Password</label>-->
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="TIEMPO DE SUSCRIPCION">
              </div>
              <div class="input-group input-group-sm mb-3">
                <!--<label for="exampleInputPassword1" class="form-label">Password</label>-->
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="REGISTRO DE SUSCRIPCION">
              </div>
              <div class="mb-3">
                <label for="rol">TIPO DE MONEDA :</label>
                <select class="form-select form-select-sm" aria-label="Default select example" name="rol" id="rol">
                  <option selected>SELECCIONAR</option>
                  <option value="1">SOL</option>
                  <option value="2">EURO</option>
                  <option value="3">DOLAR</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="rol">RECORDATORIO :</label>
                <select class="form-select form-select-sm" aria-label="Default select example" name="rol" id="rol">
                  <option selected>SELECCIONAR</option>
                  <option value="1">1 DIA ANTES</option>
                  <option value="2">1 SEMANA ANTES</option>
                  <option value="3">15 DIAS ANTES</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="tabla">
            <h3> LISTADO DE SUSCRIPCION</h3> 
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">PROVEEDOR</th>
                  <th scope="col">CATEGORIA</th>
                  <th scope="col">TIPO DE MONEDA</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">O123</th>
                  <td>NETFLIX</td>
                  <td>CABLE</td>
                  <td>SOLES</td>
                  <td><i class="fa-solid fa-circle-info"></i></td>
                </tr>
                <tr>
                  <th scope="row">0128</th>
                  <td>MOVISTAR</td>
                  <td>RED</td>
                  <td>EUROS</td>
                  <td><i class="fa-solid fa-circle-info"></i></td>
                </tr>
                <tr>
                  <th scope="row">0132</th>
                  <td>DISNEY PLUS</td>
                  <td>CABLE</td>
                  <td>DOLARES</td>
                  <td><i class="fa-solid fa-circle-info"></i></td>
                </tr>
              </tbody>
            </table>          
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>