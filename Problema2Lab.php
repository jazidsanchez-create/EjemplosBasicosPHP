<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Básica</title>
</head>
<body>

    <h2>Calculadora Principiante</h2>

    <form method="post" action="">
        Número 1: <br>
        <input type="text" name="n1"><br><br>

        Número 2: <br>
        <input type="text" name="n2"><br><br>

        <input type="submit" name="op" value="Sumar">
        <input type="submit" name="op" value="Restar">
        <input type="submit" name="op" value="Multiplicar">
        <input type="submit" name="op" value="Redondear">
    </form>

    <hr>

<?php
if (isset($_POST['n1']) && isset($_POST['n2'])) {
    $a = $_POST['n1'];
    $b = $_POST['n2'];
    $op = $_POST['op'];

    if ($op == "Sumar") {
        echo "La suma es: " . ($a + $b);
    }

    if ($op == "Restar") {
        echo "La resta es: " . ($a - $b);
    }

    if ($op == "Multiplicar") {
        echo "La multiplicación es: " . ($a * $b);
    }

    if ($op == "Redondear") {
        echo "El número 1 redondeado es: " . round($a);
    }
}
?>

</body>
</html>