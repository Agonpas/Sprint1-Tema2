<?php
$saludo = "Hello, World!!!";
echo $saludo . "\n";
/*transformamos a mayusculas*/
$mayusculas = strtoupper ($saludo);
echo $mayusculas;
/*contamos los caracteres del string*/
$longitud = strlen ($saludo);
echo "La longitud de " . $saludo . " es de " . $longitud . "\n";
/*invertimos el orden del string*/
$invertir = strrev ($saludo);
echo $invertir;
/*concatenar dos srtings*/
$curso = "Este es el curso de PHP";
echo $saludo . " " . $curso;
?>