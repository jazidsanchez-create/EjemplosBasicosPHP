<?php

// PUNTO 9 DE LA RÚBRICA: Comentarios explicativos sobre las variables y condicionales

// Captura del nombre mediante la superglobal $_REQUEST
$Nombre = $_REQUEST['nombre'];
echo "El nombre es: " . $Nombre . "<br>";

// PUNTO 4 DE LA RÚBRICA: Captura de datos enviados mediante el método POST
$Edad = $_POST['edad'];

// Evaluación condicional para determinar si es mayor de edad
if (isset($Edad) and $Edad >= 18) {
    // Acciones ejecutadas si la edad es igual o mayor a 18
    echo "usted puede votar en las próximas elecciones 2028";
} else {
    // Acciones si no cumple con la condición
    echo "Usted no es mayor de edad";
}

?>