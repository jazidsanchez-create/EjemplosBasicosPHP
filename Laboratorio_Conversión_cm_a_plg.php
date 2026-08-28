<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 1 - Ejercicio 3</title>
</head>
<body>

    <h2>Conversión de Pulgadas a Centímetros</h2>

    <!-- Formulario para ingresar las pulgadas mediante el método GET -->
    <form method="GET" action="">
        <label for="pulgadas">Ingrese las pulgadas:</label>
        <input type="number" step="any" name="pulgadas" id="pulgadas" required min="0">
        <input type="submit" value="Convertir">
    </form>

    <?php
    // COMENTARIO: Conversión de unidades multiplicando por 2.54
    if (isset($_GET['pulgadas'])) {
        $pulgadas = floatval($_GET['pulgadas']);
        $centimetros = $pulgadas * 2.54;

        echo "<p><strong>" . $pulgadas . "</strong> pulgadas equivalen a <strong>" . round($centimetros, 2) . "</strong> cm.</p>";
    }
    ?>

    <p>Esta página fue creada por Jazid Sánchez.</p>

</body>
</html>