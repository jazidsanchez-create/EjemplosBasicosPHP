<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 1 - Ejercicio 1</title>
</head>
<body>

    <h1>Área y Perímetro de un Círculo</h1>

    <?php
    // COMENTARIO: Declaración del radio fijo según la guía
    $r = 5;

    // COMENTARIO: Cálculo del área y perímetro usando la constante M_PI
    $area = M_PI * pow($r, 2);
    $perimetro = 2 * M_PI * $r;
    ?>

    <p>El radio del círculo es: <?php echo $r; ?> cm</p>
    <p>El área del círculo es: <?php echo round($area, 2); ?> cm²</p>
    <p>El perímetro del círculo es: <?php echo round($perimetro, 2); ?> cm</p>

    <p>Esta página fue creada por Jazid Sánchez.</p>

</body>
</html>