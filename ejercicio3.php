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
echo "La suma de " . $x . " + " . $y . " es igual a " . $suma . "\n";
$resta = $x - $y;
echo "La resta de " . $x . " - " . $y . " es igual a " . $resta . "\n";
$producto = $x * $y;
echo "El producto de " . $x . " * " . $y . " es igual a " . $producto . "\n";
$modulo = $x % $y;
echo "El resto de dividir " . $x . " entre " . $y . " es " . $modulo . "\n";
/*mostramos los valores de las variables n m*/ 
echo "El valor de N es $n y el valor de M es $y";
/*operamos con las variables decimales*/
$sumadec = $n + $m;
echo "La suma de " . $n . " + " . $m . " es igual a " . $sumadec . "\n";
$restadec = $n - $m;
echo "La resta de " . $n . " - " . $m . " es igual a " . $restadec . "\n";
$productodec = $n * $m;
echo "El producto de " . $n . " * " . $m . " es igual a " . $productodec . "\n";
$modulodec = $n % $m;
echo "El resto de dividir " . $n . " entre " . $m . " es " . $modulodec . "En este caso la operación no tiene sentido, ya que el módulo de valores decimales no existe. <p/>";
/* duplicamos las variables */
$dobleX = $x * 2;
$dobleY = $y * 2;
$dobleN = $n * 2;
$dobleM = $m * 2;
echo "El doble de $x es $dobleX \n";
echo "El doble de $y es $dobleY \n";
echo "El doble de $n es $dobleN \n";
echo "El doble de $m es $dobleM \n";
/* suma de todas las variables */
$sumaTodo = $x + $y + $n + $m;
echo "La suma de todas las variables es de $sumaTodo \n";
/* producto de todas las variables */
$multiplicaTodo = $x * $y * $n * $m;
echo "El producto de todas las variables es de $multiplicaTodo \n";
/* creamos la funcion de calculadora*/
function calculadora($numero1, $numero2, $operacion) {
    switch ($operacion) {
        case "sumar": 
            $resultado = $numero1 + $numero2;
            return "El resultado de la suma es: $resultado \n";
        case "restar":
            $resultado = $numero1 - $numero2;
            return "El resultado de la resta es: $resultado \n";
        case "multiplicar":
            $resultado = $numero1 * $numero2;
            return "El resultado de la multiplicación es: $resultado \n";
        case "dividir":
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
                return "El resultado de la división es: $resultado \n";
            } else {
                return "La división entre 0 no es posible";
            } 
        default:
            return "La operación no es válida";
    }
}

echo "Ingrese el primer número: "; /*solicitamos el primer número*/
$n1 = (float)fgets(STDIN);
echo "Ingrese el segundo número: "; /*solicitamos el primer número*/
$n2 = (float)fgets(STDIN);
echo "Ingrese la operación a realizar: sumar, restar, multiplicar o dividir "; /*solicitamos  operción*/
$operacion = strtolower(trim(fgets(STDIN))); /* el strtolower nos pasas lo introducido a minusculas y trim elimina espacios*/


echo calculadora($n1, $n2, $operacion); /* llamámos a la función*/


?>