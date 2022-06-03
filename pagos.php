
<?php 

session_start();
    
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
                            <th scope="col">CATEGORIA</th>
                            <th scope="col">SERVICIO SUSCRITO</th>
                            <th scope="col">CONTRATO</th>
                            <th scope="col">IGV</th>
                            <th scope="col">IMPORTE</th>
                            <th scope="col">TIPO PAGO</th>
                            <th scope="col">COMPROBANTE</th>
                            <th scope="col">SUBTOTAL</th>
                            <th scope="col">Detalle de pago</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ENTRETENIMIENTO</td>
                            <td>NETFLIX</td>
                            <td>MESES</td>
                            <td>12%</td>
                            <td>S/.49.90</td>
                            <td>:</td>
                            <td>VAUCHER</td>
                            <td>S/.49.90</td>
                            <td><i class="fa-solid fa-circle-info"></i></td>
                        </tr>
                        <tr>
                            <td>ENTRETENIMIENTO</td>
                            <td>MOVISTAR</td>
                            <td>MESES</td>
                            <td>8%</td>
                            <td>S/.122.90</td>
                            <td>:</td>
                            <td>VAUCHER</td>
                            <td>S/.122.90</td>
                            <td><i class="fa-solid fa-circle-info"></i></td>
                        </tr>
                        <tr>
                            <td>ENTRETENIMIENTO</td>
                            <td>SPOTIFY</td>
                            <td>AÑO</td>
                            <td>8%</td>
                            <td>S/.18.90</td>
                            <td>:</td>
                            <td>VAUCHER</td>
                            <td>S/.18.90</td>
                            <td><i class="fa-solid fa-circle-info"></i></td>
                        </tr>  
                        <tr>
                            <th colspan="7">Total</th>
                            <td>S/845</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
            <h4 class="alert alert-primary" role="alert">TIPO PAGO</h4>
            <h6>USTED REALIZO UN PAGO POR MÓVIL </h6>
            <h6>APLICACIÓN PAYPAL</h6>APLICACIÓN PAYPAL
            <h6>SU CUENTA DE BANCO ES</h6>
            <h6>07XX-XXX41-XXXX7858</h6>
            <h6>A NOMBRE DE</h6>
            <h6>RICHAR XXXX-XXXX-XXXX</h6>
            <h6>SU METODO DE PAGO ES </h6>
            <h6>CUOTAS DE S/.100 CADA MES</h6>
            <br>
        </div>
        <div class="container">
            <h4 class="alert alert-primary" role="alert">DETALLE DE PAGO</h4>
            <h6>SERVICIO SUSCRITO</h6>
            <h6>CATEGORIA</h6>
            <h6>TIPO DE PAGO</h6>
            <h6>ESTADO DE PAGO</h6>
            <br>
        </div>
<div class="container">
    <div classs="container p-5">
        <div class="alert alert-success shadow" role="alert" style="border-left:#155724 5px solid; border-radius: 0px">
                <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" class="m-1 bi bi-shield-fill-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm2.854 6.354a.5.5 0 0 0-.708-.708L7.5 8.793 6.354 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                </svg>    
        <div class="row">
                <p style="font-size:18px" class="mb-0 font-weight-light"><b class="mr-1">¡Exito!</b> REALIZO EL PAGO CORRECTAMENTE</p>
            </div>
        </div>
        <div class="alert alert-primary shadow" role="alert" style="border-left:#155724 5px solid; border-radius: 0px">
        <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" class="m-1 bi bi-bell-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                </svg>    
        <div class="row">
                
                <p style="font-size:18px" class="mb-0 font-weight-light"><b class="mr-1">¡Alerta!</b> LE QUEDA UN 1 DIA PARA REALIZAR EL PAGO</p>
            </div>
        </div>
        <div class="alert alert-danger shadow" role="alert" style="border-left:#721C24 5px solid; border-radius: 0px">
        <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" class="m-1 bi bi-exclamation-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                </svg>    
        <div class="row">
                
                <p style="font-size:18px" class="mb-0 font-weight-light"><b class="mr-1">¡Peligro!</b> USTED AUN NO REALIZA EL PAGO DE SU SERVICIO</p>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

        
    
