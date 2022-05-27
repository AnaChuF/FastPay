<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="inicio.php"><img src="images/logo.png" alt="" width="200px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="inicio.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pagos.php">Control de Pago</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="suscripciones.php">Datos de Suscripcion</a>
                    </li>
                <li class="nav-item">
                        <a class="nav-link" href="lista_proveedores.php">Proveedores</a>
                </li>
            </ul>        
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mx-5" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php 
                                $user = json_decode($_SESSION["user"]); 
                                echo $user->nomu_usu;                      
                            ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="configurar_cuenta.php">Configurar Cuenta</a></li>
                            <li>
                                <form action="usuario/cerrarsesion.php" method="POST">
                                    <input type="hidden" name="logout" value="" />
                                    <button class="dropdown-item" type="submit">Cerrar Sesion</button>
                                </form>
                            </li>       
                        </ul>
                    </li>
                </li>
            </ul>
        </div>
    </div>
</nav>