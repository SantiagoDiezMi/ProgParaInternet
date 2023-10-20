<?php
    $con=mysqli_connect("localhost","root","","personas");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // escape variables for security
    $texto = mysqli_real_escape_string($con, $_POST['texto']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $numero = mysqli_real_escape_string($con, $_POST['numero']);
    $link = mysqli_real_escape_string($con, $_POST['link']);
    $sql="INSERT INTO registro (texto, email, numero, link)
      VALUES ('$texto', '$email', '$numero','$link');";

echo"<p>Registro añadido exitosamente.</p>";
echo"<p><a href=\"registro.html\">Regresar al formulario</p>";
echo"<p><a href=\"impresion.html\">Ir a la impresión</p>";
    if (!mysqli_query($con,$sql)) {
      die('Error: ' . mysqli_error($con));
    }
    

    mysqli_close($con);
  ?>