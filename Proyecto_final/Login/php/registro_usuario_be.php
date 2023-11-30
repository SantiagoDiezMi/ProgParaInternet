<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuario (nombre_completo, correo, usuario, contrasena)
         VALUES ('$nombre_completo', '$correo','$usuario','$contrasena')";

//verificar que el correo no se repita en la base de datos

$verificar_correo =  mysqli_query($conexion, "Select * FROM usuario WHERE correo= '$correo'");

if(mysqli_num_rows($verificar_correo)> 0){
    echo '
            <script>
            alert("El correo ya existe, intenta con otro diferente.");
            window.location = "../index.php";
            </script>
            ';
       exit();     
}

$verificar_usuario =  mysqli_query($conexion, "Select * FROM usuario WHERE usuario= '$usuario'");

if(mysqli_num_rows($verificar_usuario)> 0){
    echo '
            <script>
            alert("El usuario ya existe, intenta con otro diferente.");
            window.location = "../index.php";
            </script>
            ';
       exit();     
}








$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '<script>
    alert("Registro Exitoso");
     window.location = "../index.php";
     </script>
     ';
} else {
    echo '<script>
    alert("Error al ejecutar la consulta: ' . mysqli_error($conexion) . '"); 
    window.location="../index.php";
    </script>
    ';
}
mysqli_close($conexion);
// No es necesario cerrar la conexión explícitamente, PHP lo hará al finalizar el script.
?>
