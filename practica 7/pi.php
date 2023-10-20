<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Aproximación de π (pi)</h1>
    <form method="post" action="pi.php">
        Ingrese un valor para n (mayor que cero): <input type="number" name="n">
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["n"];
        if ($n > 0) {
            function aproximacionPi($n) {
                $pi = 0;
                for ($i = 0; $i < $n; $i++) {
                    $pi += pow(-1, $i) / (2 * $i + 1);
                }
                return 4 * $pi;
            }

            $aproximacion = aproximacionPi($n);
            echo "<h2>Aproximación de π con n = $n:</h2>";
            echo "<p>El valor de π (Aproximación) es: $aproximacion</p>";
            echo "<img src='https://lab.anahuac.mx/~hselley/daw/img/pi.png' alt='Pi Image'>";
        } else {
            echo "<p>El valor de n debe ser mayor que cero.</p>";
        }
    }
    ?>

</body>
</html>

