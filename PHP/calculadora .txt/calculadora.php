<?php
/*
 * Lee el fichero "Challenge21.txt" incluido en el proyecto, calcula su
 * resultado e imprímelo.
 * - El .txt se corresponde con las entradas de una calculadora.
 * - Cada línea tendrá un número o una operación representada por un
 *   símbolo (alternando ambos).
 * - Soporta números enteros y decimales.
 * - Soporta las operaciones suma "+", resta "-", multiplicación "*"
 *   y división "/".
 * - El resultado se muestra al finalizar la lectura de la última
 *   línea (si el .txt es correcto).
 * - Si el formato del .txt no es correcto, se indicará que no se han
 *   podido resolver las operaciones.
 */ 
function leerYCalcularTxt($filename)
{
    $fp = fopen($filename, "r");
    if (!$fp) {
        echo "No se pudo abrir el archivo.";
        return;
    }

    $lineas = [];
    while (!feof($fp)) {
        $linea = fgets($fp);
        if ($linea !== false) {
            $lineas[] = trim($linea); // Elimina espacios y saltos de línea
        }
    }
    fclose($fp);

    // Validar formato del archivo
    if (count($lineas) % 2 == 0) {
        echo "El formato del archivo no es correcto.\n";
        return;
    }

    $result = 0;
    $currentOperator = "+";

    for ($i = 0; $i < count($lineas); $i++) {
        if ($i % 2 == 0) {
            // Expecting a number
            if (is_numeric($lineas[$i])) {
                $number = floatval($lineas[$i]);
                switch ($currentOperator) {
                    case "+":
                        $result += $number;
                        break;
                    case "-":
                        $result -= $number;
                        break;
                    case "*":
                        $result *= $number;
                        break;
                    case "/":
                        if ($number == 0) {
                            echo "División por cero detectada.\n";
                            return;
                        }
                        $result /= $number;
                        break;
                    default:
                        echo "Operador desconocido: $currentOperator.\n";
                        return;
                }
            } else {
                echo "Se esperaba un número pero se encontró: " . $lineas[$i] . "\n";
                return;
            }
        } else {
            // Expecting an operator
            if (in_array($lineas[$i], ["+", "-", "*", "/"])) {
                $currentOperator = $lineas[$i];
            } else {
                echo "Operador inválido encontrado: " . $lineas[$i] . "\n";
                return;
            }
        }
    }

    echo "El resultado es: " . $result . "\n";
}

// Llamada a la función para probarla
leerYCalcularTxt("Challenge21.txt");

?>