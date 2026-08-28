<?php

// Validar si los datos fueron enviados desde el formulario
$Nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : '';
$Edad = isset($_POST['edad']) ? $_POST['edad'] : '';

// Desplegar el nombre solo si no esta vacio
if (!empty($Nombre)) {
    echo "El nombre es: " . $Nombre . "<br>";
}

// Evaluar la edad
if (!empty($Edad) && $Edad >= 18) {
    echo "usted puede votar en las próximas elecciones 2028";
} else if (!empty($Edad)) {
    echo "Usted no es mayor de edad";
} else {
    echo "Por favor ingrese sus datos desde el formulario.";
}

?>