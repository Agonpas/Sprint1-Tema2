<?php
const CHOCOLATE = 1;
const CHICLES = 0.5;
const CARAMELOS = 1.5;

function gastoChoco($num_choco) {
    return CHOCOLATE * $num_choco;
}

function gastoChicles($num_chicles) {
    return CHICLES * $num_chicles;
}

function gastoCaramelo($num_caramelos) {
    return CARAMELOS * $num_caramelos;
}

function pagoTotal($precio_choco, $precio_chicle, $precio_caramelos) {
    return $precio_choco + $precio_chicle + $precio_caramelos;
}

echo "Ingrese la cantidad de chocolates a comprar: ";
$num_choco = (float)fgets(STDIN);
echo "Ingrese la cantidad de chicles a comprar: ";
$num_chicles = (float)fgets(STDIN);
echo "Ingrese la cantidad de caramelos a comprar: ";
$num_caramelos = (float)fgets(STDIN);

$precio_choco = gastoChoco($num_choco);
$precio_chicle = gastoChicles($num_chicles);
$precio_caramelos = gastoCaramelo($num_caramelos);

$total = pagoTotal($precio_choco, $precio_chicle, $precio_caramelos);

echo "El gasto de chocolate es de: " . $precio_choco . " euros \n";
echo "El gasto de chicles es de: " . $precio_chicle . " euros \n";
echo "El gasto de caramelos es de: " . $precio_caramelos . " euros \n";
echo "El total es de : " . $total . " euros \n";
?>
