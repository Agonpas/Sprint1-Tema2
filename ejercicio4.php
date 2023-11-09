<?php
/*creamos la funcion contar*/
function contar($numeroFinal = 10, $paso = 1) {
    for ($i = 1; $i <= $numeroFinal; $i += $paso) { /*usamos un bucle for para contar con los valores final y paso*/
        echo $i . " ";
    }
}


contar(); /*llamada a la función contar sin aportar parámetros*/
echo "\n"; /*colocamos un salto de párrafo*/
echo "Ingrese el número final: ";
$numeroFinal = fgets(STDIN);
echo "Ingrese el paso: ";
$paso = fgets(STDIN);
contar($numeroFinal, $paso); /*llamada a la función contar con parametro final y el paso*/

?>