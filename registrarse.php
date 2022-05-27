<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>Formulario Registro</title>
</head>  
<body>
  <form action="" class="form-register" method="POST" id="registrar">
      <h2 class="form-titulo">Registrarse</h2>
      <div class="contenedor-inputs">
        <input type="text" name="nombres" placeholder="Ingresar Nombre" class="input-48" required>
        <input type="text" name="apellidos" placeholder="Ingresar Apellido" class="input-48" required>
        <input type="email" name="correo" placeholder="Ingresar Correo" class="input-100" required>
        <input type="text" name="usuario"  placeholder="Ingresar Usuario" class="input-100" required>
        <input type="text" name="phone" placeholder="Ingresar Teléfono" class="input-48" required>
        <input type="text" name="dni" placeholder="Introduzca su DNI o RUC" class="input-48" required>
        <input type="password" name="clave" id="clave" placeholder="Ingresar Contraseña" class="input-48" required>
        <input type="password" name="clave2" id="clave2" placeholder="Confirmar Contraseña" class="input-48" required>
        <div class="alert alert-danger w-100" role="alert" id="alerta">
          Las constraseñas no coinciden
        </div>
        <p>Al hacer clic en Registrar aceptas <a href="#"> Los términos Condiciones y las pliticas de cookies</a></p>
        <input type="submit" value="Registrar" class="botons" id="btn_registrar">
        <p class="form__link"><a href="index.php">¿Ya tienes Cuenta?</a></p>
      </div>
  </form>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/usuarios.js"></script>
</body>
</html>