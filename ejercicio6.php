<?php
function isBitten() {
    $probabilidad = rand(0, 1); /*generamos un valor aleatorio entre 1 y 0*/
    return $probabilidad == 1;  /*si el numero es uno devolvemos un true*/
}
if (isBitten()) {
    echo "Charlie te ha mordido";
} else {
    echo "Charlie no te ha mordido";
}
?>