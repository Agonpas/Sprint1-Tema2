
<?php
// definimos los distintos tipos de variables
$integer = 49;
$double = 3.14;
$string = "Hola, Mundo";
$boolean = true;
// imprimimos las diferentes variables
echo "Integer: " . $integer . "\n";
echo "Double: " . $double . "\n";
echo "String: " . $double . "\n";
echo "Boolean: " . $double . "\n";
// creamos una constante
define('MI_NOMBRE', 'albert gonzalez'); /* el primer termino es el nombre de la constante y en la segundo el valor*/
// imprimimos en formato titulo la constante
echo "Mi nombre en formato titulo " . ucwords(MI_NOMBRE) . "\n";
?>