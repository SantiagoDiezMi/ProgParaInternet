
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "tienda";

// Crear conexión
$conexion = mysqli_connect ($servername, $username, $password, $database);

// Verificar la conexión
if ($conexion) {
  echo 'Conectado exitosamente';
}else{
  echo 'No se pudo conectar a la base de datos';
}


// Devolver la conexión
return $conexion;

?>
