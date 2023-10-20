<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Aproximación de e</h1>
    <form method="post" action="e.php">
        Ingrese un valor para n (mayor que cero): <input type="number" name="n">
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["n"];
        if ($n > 0) {
            function factorial($x) {
                if ($x <= 1) {
                    return 1;
                } else {
                    return $x * factorial($x - 1);
                }
            }

            echo "<h2>Aproximación de e con n = $n:</h2>";
            echo "<table>";
            echo "<tr><td>N</td><td>X</td></tr>"; 

            $e = 0;
            for ($i = 0; $i <= $n; $i++) {
                $e += 1 / factorial($i);
                echo "<tr><td>$i</td><td>$e</td></tr>";
            }

            echo "</table>";

            $aproximacion = $e;
            echo "<p>El valor de e (Aproximación) es: $aproximacion</p>";
            echo "<img src='https://lab.anahuac.mx/~hselley/daw/img/e.png' alt='e Image'>";
        } else {
            echo "<p>El valor de n debe ser mayor que cero.</p>";
        }
    }
    ?>

</body>
</html>

