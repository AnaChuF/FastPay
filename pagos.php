<?php   
    session_start();

    if(!$_SESSION['user']){
        header('location: index.php');
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0abff36f27.js" crossorigin="anonymous"></script>
    <title>Control de pagos</title>
    </head>
    <body>
        <?php
            require_once('Layouts/nav.php');
        ?>
        <div class="container">
            <div class="mt-4">
                <div class="row">
                    <div class="col-8">
                        <h3>Control de Pagos</h3>
                    </div>
                    <div class="col-4">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th scope="col">Servicio suscrito</th>
                            <th scope="col">Categoria de pago</th>
                            <th scope="col">Detalle de pago</th>
                            <th scope="col">IGV</th>
                            <th scope="col">Importe</th>
                            <th scope="col">Subtotales</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td><i class="fa-solid fa-circle-info"></i></td>
                        </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><i class="fa-solid fa-circle-info"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>@twitter</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                           <td>@mdo</td>
                           <td><i class="fa-solid fa-circle-info"></i></td>
                        </tr>
                        <tr>
                            <th colspan="5">Total</th>

                            <td>1321</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <h4 class="mt-5">Detalles de Pago</h4>
                <fieldset disabled>
                    <div class="input-group mb-3 mt-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Servicio Suscrito" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="col ms-2">
                            <input type="text" class="form-control" placeholder="Categoria" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="col ms-2">
                            <input type="text" class="form-control" placeholder="Tipo de pago" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Estado de pago" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>