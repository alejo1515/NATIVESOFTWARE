<?php
 $servidor = "localhost";
 $usuario = "root";
 $clave = "";
 $baseDeDatos = "usuario";

 $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

 ?>







<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>

    <link rel="stylesheet" href="cssregistro.css">

</head>
<body>

    <div class="registro-container">
        <div class="form-card">
            <h1>INGRESE SUS DATOS</h1>

            <form id="registroForm" action="#" name="usuario" method="post">
                <div class="form-group">
                    <label for="nombreUsuario">Nombre de Usuario:</label>
                    <input type="text" id="nombreUsuario" name="nombreUsuario" required
                           placeholder="nombreUsuario"
                           minlength="10" maxlength="20"
                           pattern="[a-zA-Z0-9]+"
                           title="Solo letras y números, entre 10 y 20 caracteres.">
                    <small>Solo letras y números, 3-20 caracteres.</small>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required
                           placeholder="email">
                    <small>Ingresa un email válido.</small>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input name="contrasena" type="text" id="password"  required
                           placeholder="contrasena"
                           minlength="8"
                           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                           title="Debe contener al menos un número, una letra mayúscula, una letra minúscula, y al menos 8 o más caracteres.">
                    <small>8+ caracteres, Mayúscula, minúscula, número.</small>
                </div>

                <div class="form-group">
                    <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                    <input type="date" id="fechaNacimiento" name="fechaNacimiento" required
                           min="1900-01-01" max="2024-12-31"> <small>Ingresa tu fecha de nacimiento (no puede ser en el futuro).</small>
                </div>

                <input type="submit" class="btn-submit" name="registro">
                <input type="reset">


            </form>

            <div id="mensaje" class="message"></div>
        </div>
    </div>
</body>

</html>

<?php

if(isset($_POST['registro'])){
$nombreUsuario=$_POST['nombreUsuario'];
$fechaNacimiento=$_POST['fechaNacimiento'];
$contrasena=$_POST['contrasena'];
$email=$_POST['email'];

$insertarDatos = "INSERT INTO usuario VALUES ('$email','$nombreUsuario','$contrasena','$fechaNacimiento') ";

$ejecutarInsertar = mysqli_query ($enlace,$insertarDatos);

}

?>