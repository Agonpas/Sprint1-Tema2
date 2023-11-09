<?php
const LLAMADA_MIN =3;
const COSTE_MIN = 0.1;
function precioLlamada ($duracion_llamada) {
    if ($duracion_llamada <= LLAMADA_MIN) {
        $coste_llamada = COSTE_MIN;
        return $coste_llamada;
    } else if ($duracion_llamada > LLAMADA_MIN) {
        $coste_llamada = (($duracion_llamada - LLAMADA_MIN) *0.05) + COSTE_MIN ;
        return $coste_llamada;
    } else {
        $mensaje_error = "El tiempo de llamada no es correcto";
        return $mensaje_error;
    }
}
$duracion_llamada = 5;
echo "El coste total de la llamada es de: " . precioLlamada($duracion_llamada) . " euros";
?>