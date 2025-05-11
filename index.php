<?php
require_once 'Docente.php';
require_once 'Alumno.php';
$docente1 = new Docente("Roberto", "Solis", "Robles", 45, "Sistemas", "M.C.", 15);
$docente2 = new Docente("Ana", "Lopez", "Martinez", 38, "Matemáticas", "Dr.", 10);
$alumno1 = new Alumno("Alonso", "Lira", "Espinoza", 20, "Sistemas", 9.3, 5);
$alumno2 = new Alumno("María", "Gomez", "Perez", 19, "Matemáticas", 8.7, 3);
echo $docente1->obtenerNombreCompleto() . "<br>";
echo $docente2->obtenerNombreCompleto() . "<br>";
echo $alumno1->obtenerNombreCompleto() . "<br>";
echo $alumno2->obtenerNombreCompleto() . "<br>";
?>
