<?php
/*creamos la funcion contar*/
function contar($numeroFinal = 10, $paso = 1) {
    for ($i = 1; $i <= $numeroFinal; $i += $paso) { /*usamos un bucle for para contar con los valores final y paso*/
        echo $i . " ";
    }
}


contar(); /*llamada ala función contar sin aportar parámetros*/
echo "</p>"; /*colocamos un salto de párrafo*/
contar(30, 3); /*llamada a la función contar con parametro final y el paso*/

?>