<?php
function gradoEstudiante($nota) {
    if ($nota >= 60) {
        return "Primera División";
    } elseif ($nota >= 45) {
        return "Segunda División";
    } elseif ($nota >= 33) {
        return "Tercera División";
    } else {
        return "Reprobado";
    }
}
/* creamos 4 ejemplos para los diferentes grados*/
$nota1 = 65;
$nota2 = 58;
$nota3 = 37;
$nota4 = 26;

echo "Estudiante 1: Nota $nota1 => Grado: " . gradoEstudiante($nota1) . "\n";
echo "Estudiante 2: Nota $nota2 => Grado: " . gradoEstudiante($nota2) . "\n";
echo "Estudiante 3: Nota $nota3 => Grado: " . gradoEstudiante($nota3) . "\n";
echo "Estudiante 4: Nota $nota4 => Grado: " . gradoEstudiante($nota4) . "\n";

/*habilitamos el uso de la función con entrada por teclado*/
echo "Ingrese el porcentaje de notas: ";
$nota = fgets(STDIN);
echo "El porcentaje de notas es: $nota El grado que le corresponde es: " . gradoEstudiante($nota) . "\n";

?>