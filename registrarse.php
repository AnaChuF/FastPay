<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Formulario Registro</title>
</head>  
<body>
  <form action="usuario/UsuarioInsertar.php" class="form-register" method="POST">
      <h2 class="form-titulo">Registrarse</h2>
      <div class="contenedor-inputs">
        <input type="text" name="nombres" placeholder="Ingresar Nombre" class="input-48" required>
        <input type="text" name="apellidos" placeholder="Ingresar Apellido" class="input-48" required>
        <input type="email" name="correo" placeholder="Ingresar Correo" class="input-100" required>
        <input type="user" name="usuario"  placeholder="Ingresar Usuario" class="input-100" required>
        <input type="tel" name="phone" placeholder="Ingresar Teléfono" class="input-48" required>
        <input type="text" name="dni" placeholder="Introduzca su DNI o RUC" class="input-48" required>
        <input type="password" name="clave" placeholder="Ingresar Contraseña" class="input-48" required>
        <input type="password" name="clave2" placeholder="Confirmar Contraseña" class="input-48" required>
        <p>Al hacer clic en Registrar aceptas <a href="#"> Los términos Condiciones y las pliticas de cookies</a></p>
        <input type="submit" value="Registrar" class="botons">
        <p class="form__link"><a href="index.php">¿Ya tienes Cuenta?</a></p>
      </div>
  </form>
    </body>
</html>