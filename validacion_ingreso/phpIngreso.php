<?php
 $servidor = "localhost";
 $usuario = "root";
 $clave = "";
 $baseDeDatos = "usuario";

 $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

 

if (!$enlace)
{

    die("no hay conexio" .mysqli_connect_error());
}
	$nombre = $_POST["txtusuario"];
    $pass = $_POST["txtcontrasena"];

    $query = mysqli_query($enlace,"SELECT * FROM usuario WHERE correo = '".$nombre."' and contrasena ='".$pass."'");
    $nr = mysqli_num_rows($query);

    if($nr == 1)
    {

        header("Location: ../inicio/index.html");
    }
  else if ($nr == 0)
<<<<<<< HEAD
    {  $noIngreso = "no ingreso";
  echo $noIngreso;
=======
    {  header("Location:phpIngreso_credenciales.html")
>>>>>>> bc23e629a93d1dfd26f1bf5c006dbf68e0216cc4
    }
?>