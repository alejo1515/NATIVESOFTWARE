<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario - Native Software</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="registro.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4 form-registro-card">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Registro de Usuario</h2>
                <form action="procesar_registro.php" method="POST">
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo Electrónico <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="tu@ejemplo.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="nombre_usuario" class="form-label">Nombre de Usuario <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="ej. juanperezdev" required>
                    </div>

                    <div class="mb-3">
                        <label for="contrasena" class="form-label">Contraseña <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Mínimo 8 caracteres" required minlength="8">
                    </div>

                    <div class="mb-3">
                        <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                    </div>

                    <div class="mb-3">
                        <label for="portafolio" class="form-label">URL Portafolio (Opcional)</label>
                        <input type="url" class="form-control" id="portafolio" name="portafolio" placeholder="https://tuportafolio.com">
                    </div>

                    <div class="mb-3">
                        <label for="redes_sociales" class="form-label">Enlaces Redes Sociales (Opcional)</label>
                        <input type="text" class="form-control" id="redes_sociales" name="redes_sociales" placeholder="ej. LinkedIn, GitHub, Twitter">
                        <div class="form-text text-light">Puedes separar múltiples enlaces con comas.</div>
                    </div>

                    <div class="mb-3">
                        <label for="ubicacion" class="form-label">Ubicación (Opcional)</label>
                        <input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="ej. Bogotá, Colombia">
                    </div>

                    <div class="mb-3">
                        <label for="bio" class="form-label">Biografía (Opcional)</label>
                        <textarea class="form-control" id="bio" name="bio" rows="3" placeholder="Cuéntanos un poco sobre ti y tus intereses..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono (Opcional)</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="ej. +XX XXXXXXXXXX">
                    </div>

                    <div class="d-grid gap-2 mt-4">
                        <button type="submit" class="btn btn-primary btn-lg custom-submit-btn">
                            <i class="bi bi-person-plus me-2"></i> Registrarme
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
>>>>>>> bc23e629a93d1dfd26f1bf5c006dbf68e0216cc4
