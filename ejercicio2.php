<?php
$saludo = "Hello, World!!!";
echo $saludo . "<p/>";
/*transformamos a mayusculas*/
$mayusculas = strtoupper ($saludo);
echo $mayusculas;
/*contamos los caracteres del string*/
$longitud = strlen ($saludo);
echo "La longitud de " . $saludo . " es de " . $longitud . "<p/>";
/*invertimos el orden del string*/
$invertir = strrev ($saludo);
echo $invertir . "<p/>";
/*concatenar dos srtings*/
$curso = "Este es el curso de PHP";
echo $saludo . " " . $curso;
?>