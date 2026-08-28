<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 1 - Ejercicio 2</title>
</head>
<body>

    <h2>Cálculo del Área de una Circunferencia</h2>

    <!-- Formulario para ingresar el radio mediante el método GET -->
    <form method="GET" action="">
        <label for="radio">Ingrese el radio:</label>
        <input type="number" step="any" name="radio" id="radio" required min="0.01">
        <input type="submit" value="Calcular">
    </form>

    <?php
    // COMENTARIO: Captura del dato dinámico y procesamiento condicional
    if (isset($_GET['radio'])) {
        $radio = floatval($_GET['radio']);
        $area = M_PI * pow($radio, 2);

        echo "<p>El área de la circunferencia para un radio de " . $radio . " es: " . round($area, 2) . "</p>";
    }
    ?>

    <p>Esta página fue creada por Jazid Sánchez.</p>

</body>
</html>