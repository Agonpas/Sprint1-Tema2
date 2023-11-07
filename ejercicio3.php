<?php
/*declaramos las variables*/
$x = 10;
$y = 8;
$n = 3.14;
$m = 1.5;
/*mostramos los valores de las variables x y*/ 
echo "El valor de X es " . $x . " El valor de Y es " . $y;
/*operamos con las variables enteras*/
$suma = $x + $y;
echo "La suma de " . $x . " + " . $y . " es igual a " . $suma . "<p/>";
$resta = $x - $y;
echo "La resta de " . $x . " - " . $y . " es igual a " . $resta . "<p/>";
$producto = $x * $y;
echo "El producto de " . $x . " * " . $y . " es igual a " . $producto . "<p/>";
$modulo = $x % $y;
echo "El resto de dividir " . $x . " entre " . $y . " es " . $modulo . "<p/>";
/*mostramos los valores de las variables n m*/ 
echo "El valor de N es $n y el valor de M es $y";
/*operamos con las variables decimales*/
$sumadec = $n + $m;
echo "La suma de " . $n . " + " . $m . " es igual a " . $sumadec . "<p/>";
$restadec = $n - $m;
echo "La resta de " . $n . " - " . $m . " es igual a " . $restadec . "<p/>";
$productodec = $n * $m;
echo "El producto de " . $n . " * " . $m . " es igual a " . $productodec . "<p/>";
$modulodec = $n % $m;
echo "El resto de dividir " . $n . " entre " . $m . " es " . $modulodec . "En este caso la operación no tiene sentido, ya que el módulo de valores decimales no existe. <p/>";
/* duplicamos las variables */
$dobleX = $x * 2;
$dobleY = $y * 2;
$dobleN = $n * 2;
$dobleM = $m * 2;
echo "El doble de $x es $dobleX <p/>";
echo "El doble de $y es $dobleY <p/>";
echo "El doble de $n es $dobleN <p/>";
echo "El doble de $m es $dobleM <p/>";
/* suma de todas las variables */
$sumaTodo = $x + $y + $n + $m;
echo "La suma de todas las variables es de $sumaTodo <p/>";
/* producto de todas las variables */
$multiplicaTodo = $x * $y * $n * $m;
echo "El producto de todas las variables es de $multiplicaTodo <p/>";
/* creamos la funcion de calculadora*/
function calculadora($numero1, $numero2, $operacion) {
    switch ($operacion) {
        case "sumar": 
            $resultado = $numero1 + $numero2;
            return "El resultado de la suma es: $resultado <p/>";
        case "restar":
            $resultado = $numero1 - $numero2;
            return "El resultado de la resta es: $resultado <p/>";
        case "multiplicar":
            $resultado = $numero1 * $numero2;
            return "El resultado de la multiplicación es: $resultado <p/>";
        case "dividir":
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
                return "El resultado de la división es: $resultado <p/>";
            } else {
                return "La división entre 0 no es posible";
            } 
        default:
            return "La operación no es válida";
    }
}

/* usamos la función*/
$n1 = 10;
$n2 = 8;

echo calculadora($n1, $n2, "sumar"); /* llamámos a la función y elegimos la opción de suma*/
echo calculadora($n1, $n2, "restar"); /* llamámos a la función y elegimos la opción de resta*/
echo calculadora($n1, $n2, "multiplicar"); /* llamámos a la función y elegimos la opción de multiplicación*/
echo calculadora($n1, $n2, "dividir"); /* llamámos a la función y elegimos la opción de división*/

?>