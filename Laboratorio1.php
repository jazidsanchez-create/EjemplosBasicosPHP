//ejercicio 1: Área y Perímetro de un Círculo
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio #1 - Círculo</title>
</head>
<body>
    <h1>El área y perímetro de un círculo</h1>

<?php
    $r = 5; // Radio asignado

    $area = M_PI * pow($r, 2);
    $perimetro = 2 * M_PI * $r;

    echo "Área = " . round($area, 2) . "<br><br>";
    echo "Perímetro = " . round($perimetro, 2) . "<br>";
?>

</body>
</html>

//ejercicio 2: Área de la Circunferencia
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área de una Circunferencia</title>
</head>
<body>
    <h2>Cálculo del área de una circunferencia</h2>

    <form method="GET" action="">
        <label for="radio">Introduzca el radio (dato real):</label><br>
        <input type="number" step="any" name="radio" id="radio" required><br><br>
        <input type="submit" value="Calcular Área">
    </form>
    <hr>

<?php
if (isset($_GET['radio'])) {
    $radio = floatval($_GET['radio']);

    $area = M_PI * pow($radio, 2);

    echo "El área de la circunferencia es: " . round($area, 2) . "<br>";
}
?>
</body>
</html>

//ejercicio 3: Pulgadas a Centímetros
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión de Pulgadas a Centímetros</title>
</head>
<body>
    <h2>Convertir pulgadas a centímetros</h2>

    <form method="GET" action="">
        <label for="pulgadas">Leer las pulgadas:</label><br>
        <input type="number" step="any" name="pulgadas" id="pulgadas" required><br><br>
        <input type="submit" value="Convertir a Centímetros">
    </form>
    <hr>

<?php
if (isset($_GET['pulgadas'])) {
    $pulgadas = floatval($_GET['pulgadas']);

    $centimetros = $pulgadas * 2.54;

    echo "Resultado: " . $pulgadas . " pulgadas equivalen a " . round($centimetros, 2) . " centímetros.<br>";
}
?>
</body>
</html>