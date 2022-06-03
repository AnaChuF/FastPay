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
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/inicio.css">

    <title>FASTPAY</title>
  </head>
  <body>
    
    <?php
        require_once('Layouts/nav.php');
    ?>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1 class="center-align titulo">Bienvenido Developer</h1>
                
                <div class="carousel center-align">
                    <div class="carousel-item">
                        <img src="images/netflix.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="images/prime-video.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="images/news.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Bcp.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="images/disney+.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/inicio.js"></script>
  </body>
</html>