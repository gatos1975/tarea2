<?php

function calcularFactorial($numero) {
    // Inicializamos el resultado a 1.
    $factorial = 1;

    // Calculamos el factorial utilizando un bucle for.
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }

    // Devolvemos el resultado.
    return $factorial;
}

// Verificamos si se ha enviado un formulario.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Leemos el número desde el formulario.
    $numero = isset($_POST['numero']) ? intval($_POST['numero']) : 0;

    // Verificamos si el número ingresado es válido.
    if ($numero < 0) {
        echo "Por favor, ingrese un número Positivo.";
    } else {
        // Calculamos y mostramos el factorial.
        $resultado = calcularFactorial($numero);
        echo "El factorial de $numero es: $resultado";
    }
}
?>

<!-- Formulario HTML para ingresar el número -->
<form method="post" action="">
    <label for="numero">Ingrese un número para calcular su factorial:</label>
    <input type="text" name="numero" id="numero" />
    <input type="submit" value="Calcular Factorial" />
</form>